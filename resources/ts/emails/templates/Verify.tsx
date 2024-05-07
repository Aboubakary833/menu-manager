import {Body, Column, Container, Hr, Img, Preview, Row, Section, Text, Link} from "jsx-email";
import Layout from "../../Layout.tsx";
import React from "react";

const Verify = () => {

    return <Layout>
        <Preview>
            Verify
        </Preview>
        <Body className="bg-slate-50">
            <Section className="w-[320px] sm:w-[500px] md:w-[580px] p-[10px] bg-white mx-auto border-2 border-info-900 rounded-lg">
                <Container>
                    <Section className="w-fit mt-5">
                        <Text className="font-bold text-center" style={{fontSize: "30px"}}>Verify your account</Text>
                        <Text className="mt-10" style={{fontSize: "18px"}}>Hi dear new user, </Text>
                        <Text className="mt-3" style={{fontSize: "18px"}}>We're happy you signed up for Menu Manager. To start exploring the application, please confirm your email address.</Text>
                    </Section>
                    <Section className="my-5 text-center">
                        <Link href="#" className="w-[200px] font-semibold bg-primary hover:bg-primary/90 h-10 rounded-md px-3 inline-flex items-center justify-center whitespace-nowrap text-sm ring-offset-white transition-colors outline-0 focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50" style={{color: "#FFFFFF"}}>Verify email</Link>
                    </Section>
                    <Section className="my-5">
                        <Text className="leading-none" style={{fontSize: "18px"}}>Welcome to Menu Manager!</Text>
                        <Text style={{fontSize: "15px", color: "#3D3D3D"}}>The Menu Manager Team.</Text>
                    </Section>
                    <Hr/>
                    <Section className="w-[200px] mx-auto">
                        <Text>Vous pouvez nous suivez sur:</Text>
                        <Row  className="text-center mx-auto">
                            <Column>
                                <Img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMzZDNkM2QiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1mYWNlYm9vayI+PHBhdGggZD0iTTE4IDJoLTNhNSA1IDAgMCAwLTUgNXYzSDd2NGgzdjhoNHYtOGgzbDEtNGgtNFY3YTEgMSAwIDAgMSAxLTFoM3oiLz48L3N2Zz4=" width={24} height={24} />
                            </Column>
                            <Column>
                                <Img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMzZDNkM2QiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1saW5rZWRpbiI+PHBhdGggZD0iTTE2IDhhNiA2IDAgMCAxIDYgNnY3aC00di03YTIgMiAwIDAgMC0yLTIgMiAyIDAgMCAwLTIgMnY3aC00di03YTYgNiAwIDAgMSA2LTZ6Ii8+PHJlY3Qgd2lkdGg9IjQiIGhlaWdodD0iMTIiIHg9IjIiIHk9IjkiLz48Y2lyY2xlIGN4PSI0IiBjeT0iNCIgcj0iMiIvPjwvc3ZnPg==" width={24} height={24} />
                            </Column>
                            <Column>
                                <Img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiMzZDNkM2QiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS10d2l0dGVyIj48cGF0aCBkPSJNMjIgNHMtLjcgMi4xLTIgMy40YzEuNiAxMC05LjQgMTcuMy0xOCAxMS42IDIuMi4xIDQuNC0uNiA2LTJDMyAxNS41LjUgOS42IDMgNWMyLjIgMi42IDUuNiA0LjEgOSA0LS45LTQuMiA0LTYuNiA3LTMuOCAxLjEgMCAzLTEuMiAzLTEuMnoiLz48L3N2Zz4=" width={24} height={24} />
                            </Column>
                        </Row>
                    </Section>
                </Container>
            </Section>
        </Body>
    </Layout>
}

export default Verify
