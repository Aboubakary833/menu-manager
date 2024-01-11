<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Les informations fournis ne figurent pas dans notre base de données.',
    'password' => 'Le mot de passe fourni est incorrect.',
    'throttle' => 'Plusieurs tentatives de connexion. Veuillez réessayer dans :seconds sécondes.',
    'socialite' => [
        "email_not_found" => "Il semblerait que vous n'ayez pas autorisé l'accès à votre adresse email ou qu'aucune addresse email ne soit liée à votre compte.",
        "incorrect_provider_name" => "Il y'a un souci avec le nom du service d'authentification.",
    ],
    "ip" => [
        "null" => "Vous ne pouvez poursuivre puisque vous avez votre adresse IP caché.",
        "forbidden" => [
            "title" => "L'accès à cette page vous est interdite",
            "note" => "Si vous tentez de vous authentifier ou de valider la vérification de votre adresse email, veuillez le faire avec l"
        ]
    ]
];
