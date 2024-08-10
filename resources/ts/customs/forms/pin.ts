import HSPinInput, {ICollectionItem} from "@preline/pin-input";

type PinInput = HSPinInput & ICollectionItem<HSPinInput>;

window.addEventListener("load", function () {
    //@ts-ignore
    const pinInputs = this["$hsPinInputCollection"] as PinInput[];

    pinInputs.forEach((pinInput) => {
        const element = pinInput.element;
        const container = element.el;
        const maskInput = container.querySelector("input[data-hs-pin-mask-input]") as HTMLElement | null;
        if (maskInput) {
            //@ts-ignore
            element.on("completed", ({currentValue}) => {
                const value = currentValue.join("");
                maskInput.setAttribute("value", value);
            })
        }
    });
});
