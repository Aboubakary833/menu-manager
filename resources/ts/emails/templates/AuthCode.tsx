import {Body, Column, Container, Hr, Img, Link, Preview, Row, Section, Text} from "jsx-email";
import Layout from "../Layout.tsx";

const AuthCode = () => {

    return <Layout>
        <Preview>
            Authentication code
        </Preview>
        <Body className="bg-slate-50">
            <Section className="w-[320px] sm:w-[500px] md:w-[580px] p-[10px] bg-white mx-auto border-2 border-info-900 rounded-lg">
                <Container>
                    <Section className="w-fit mx-auto">
                        <Img src="http://localhost:8000/logo.png" alt="Menu Manager" className="w-20 h-20" />
                    </Section>
                    <Section className="mt-5 text-center">
                        <Text className="font-bold" style={{fontSize: "30px", lineHeight: "40px"}}>Code d'authentification</Text>
                        <Text className="mt-5" style={{fontSize: "16px"}}>Veuillez entrez ce code dans le champ de code pour vous connecter:</Text>
                    </Section>
                    <Section className="my-5">
                        <Row className="w-[200px] h-[45px] text-center font-semibold mx-auto bg-primary-100 rounded-lg" style={{fontSize: "28px"}}>
                            <Column>2</Column>
                            <Column>4</Column>
                            <Column>9</Column>
                            <Column>0</Column>
                            <Column>2</Column>
                        </Row>
                    </Section>
                    <Section className="mb-5 w-10/12 mx-auto p-2">
                        <Text>Si vous n'êtes pas auteur de cette requête, veuillez cliquer sur ce <Link>lien</Link> pour bloquer l'appareil de l'auteur.</Text>
                    </Section>
                    <Hr />
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

export default AuthCode
