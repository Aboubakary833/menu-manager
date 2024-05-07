<?php

return [
  "auth" => [
      "shared" => [
          "continue_with_email" => "Poursuivre avec l'email",
          "continue_with_google" => "Se connecter via Google",
          "continue_with_facebook" => "Se connecter via Facebook",
      ],
      "login" => [
          "index" => [
              "title" => "Connexion",
              "card_title" => "Bienvenue",
              "not_registered_yet" => "Pas encore de compte?",
              "register" => "S'inscrire",
          ],
          "validate" => [
              "title" => "Vérification identité",
              "card_title" => "Confirmez votre identité",
              "card_description" => "Nous venons de vous envoyez par mail un code à **cinq(5)** chiffres que vous devez fournir dans ces champs pour confirmer votre identité.",
              "confirm" => "Confirmer"
          ]
      ],
      "register" => [
          "index" => [
              "title" => "S'inscrire",
              "card_title" => "Créer un compte",
              "submit" => "Poursuivre l'inscription",
              "login" => "Se connecter",
          ],
          "verify" => [
              "title" => "Valider votre adresse email",
              "heading" => "Vérifier votre adresse email",
              "description" => "Nous vous avons envoyé un mail à l'adresse :email pour que vous confirmez la validité de votre adresse email. Après avoir reçu le lien, cliquez sur le lien y fourni pour complété valider votre inscription.",
              "notReceiveYet" => "Vous n'avez pas encore reçu de mail?",
              "resend" => "Renvoyer le mail"
          ],
          "complete" => [
              "title" => "Terminez votre inscription",
              "card_title" => "Compléter votre inscription",
              "submit" => "Soumettre"
          ]
      ]
  ]
];
