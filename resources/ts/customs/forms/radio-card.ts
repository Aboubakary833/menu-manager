class RadioCard {
	private element: HTMLDivElement;
    private radio: HTMLInputElement;
	private status: boolean = false;
    private activeClasses =
        "text-primary dark:text-primary stroke-primary dark:stroke-primary border-primary dark:border-primary";
    private inactiveClasses =
        "text-dark dark:text-info stroke-dark-400 dark:stroke-info border-info-600 dark:border-dark-400";

    public constructor(element: HTMLDivElement) {
        this.element = element;
        this.radio = element.querySelector(
            "input[type='radio']"
        ) as HTMLInputElement;

        if (this.radio.checked)
            this.setActive();
    }

    public setActive() {
		this.status = true;
        this.radio.checked = true;
        this.element.setAttribute(
            "class",
            this.element
				.classList
                .toString()
                .replace(this.inactiveClasses, this.activeClasses)
        );

        const { showOrHide, showOrHideAction } = this.element.dataset;

        if (showOrHide && showOrHideAction) {
            const showOrHideElement = document.querySelector(showOrHide);
            if (showOrHideAction === "show")
                showOrHideElement?.setAttribute("style", "display: block");
            else showOrHideElement?.setAttribute("style", "display: none");
        }
    }

    public setInactive() {
		this.status = false;
        this.radio.checked = false;
        this.element.setAttribute(
            "class",
            this.element
				.classList
                .toString()
                .replace(this.activeClasses, this.inactiveClasses)
        );
    }

	public getElement() {
		return this.element;
	}

	public getStatus() {
		return this.status;
	}
}

window.addEventListener("load", function () {
	const radioCardElements = Array.from(
		document.querySelectorAll<HTMLDivElement>(".radio-card")
	);
    if (radioCardElements.length)
	{
		const radioCards = radioCardElements.map((radioCard) => new RadioCard(radioCard));
		const radioCardsParent = radioCardElements[0].parentElement as HTMLElement;

		document.addEventListener('click', (ev) => {
			const target = ev.target as HTMLElement|SVGElement;
			if (!radioCardsParent.contains(target))
				return;
            let element:HTMLDivElement;
			if (!radioCardElements.includes(target as HTMLDivElement))
				element = radioCardElements.find((rc) => rc.contains(target)) as HTMLDivElement;
            
            const activeRadioCard = radioCards.find(r => r.getStatus());
            if (activeRadioCard)
                activeRadioCard.setInactive();
            (radioCards.find(r => r.getElement() === element) as RadioCard).setActive();
		});
	}
});
