<?php

return [
    "auth" => [
        "shared" => [
            "continue_with_email" => "Continue with email",
            "continue_with_google" => "Log in with Google",
            "continue_with_facebook" => "Log in with Facebook",
        ],
        "login" => [
            "index" => [
                "title" => "Login",
                "card_title" => "Welcome",
                "not_registered_yet" => "Don't have account yet?",
                "register" => "Register",
            ],
            "validate" => [
                "title" => "Identity verification",
                "card_title" => "Confirm your identity",
                "card_description" => "We just sent you a **five(5)** digits code you should provide in these fields below in order to log in.",
                "confirm" => "Confirm"
            ]
        ],
        "register" => [
            "index" => [
                "title" => "Sign up",
                "card_title" => "Create a new account",
                "submit" => "Continue the registration",
                "login" => "Login",
            ],
            "verify" => [
                "title" => "Verify your email address",
                "heading" => "Verify your email address",
                "description" => "We have sent you an email to :email to confirm the validity of your email address. After receiving the email, follow the link provided to confirm your registration.",
                "notReceiveYet" => "Not receive an email yet?",
                "resend" => "Resend the mail"
            ]
        ]
    ]
];
