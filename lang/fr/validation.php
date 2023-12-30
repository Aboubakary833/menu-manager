<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'La valeur entré doit être permis.',
    'accepted_if' => 'La valeur entré doit être permis si :other est :value.',
    'active_url' => 'La valeur entrée n\'est pas un URL valide.',
    'after' => 'Vous devez entrer une date supérieur à :date.',
    'after_or_equal' => 'Vous devez entrer une date supérieur ou égale à :date.',
    'alpha' => 'Ce champ ne doit contenir que des lettres.',
    'alpha_dash' => 'Ce champ ne doit contenir que des lettres, des chiffres, des tirets et des sous lignes.',
    'alpha_num' => 'Ce champ ne doit contenir que des lettres et des chiffres.',
    'array' => 'Ce champ doit être un tableau.',
    'before' => 'Vous devez entrer une date inférieur à :date.',
    'before_or_equal' => 'Vous devez entrer une date inférieur ou égale à :date.',
    'between' => [
        'numeric' => 'La valeur fournie doit être compris entre :min et :max.',
        'file' => 'La taille du fichier à charger doit être compris entre :min et :max kilobytes.',
        'string' => 'La valeur à entrer doit avoir un nombre de caractère compris entre :min et :max.',
        'array' => 'Le tableau doit avoir un nombre d\'éléments compris entre :min et :max.',
    ],
    'boolean' => 'La valeur à fournir ne doit être que vrai ou faux.',
    'confirmed' => 'La valeur de confirmation ne correspond pas à la valeur du champ précédent.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'La valeur fournie n\'est pas une date valide.',
    'date_equals' => 'La valeur fournie n\'est pas une date égale à :date.',
    'date_format' => 'La valeur fournie ne correspond au format de date ":format".',
    'declined' => 'Ce champ doit être décliné.',
    'declined_if' => 'Ce champ doit être décliné si :other équivaut à :value.',
    'different' => 'La valeur de ce champ et celle du champ :other doivent être differentes.',
    'digits' => 'Le nombre de chiffre à fournir est de :digits.',
    'digits_between' => 'Le nombre de chiffre à entré doit être compris entre :min et :max.',
    'dimensions' => 'Les dimensions de l\'image chargé sont invalides.',
    'distinct' => 'Ce champ a une valeur dupliquée.',
    'email' => 'Veuillez entrer une adresse email valide.',
    'ends_with' => 'La valeur de ce champ doit se terminer par l\une des valeurs suivantes: ":values".',
    'enum' => 'La valeur sélectionnée est invalide.',
    'exists' => 'La valeur sélectionnée est invalide.',
    'file' => 'Ce champ doit prendre un fichier.',
    'filled' => 'Ce champ doit avoir une valeur.',
    'gt' => [
        'numeric' => 'La valeur fournie doit être supérieure à :value.',
        'file' => 'La taille du fichier chargé doit être supérieure à :value kilobytes.',
        'string' => 'La taille de la valeur entrée doit être supérieure à :value lettres.',
        'array' => 'Le tableau fournie doit avoir un nombre d\'élément supérieur à :value.',
    ],
    'gte' => [
        'numeric' => 'La valeur fournie doit être supérieure ou égale à :value.',
        'file' => 'La taille du fichier chargé doit être supérieure ou égale à :value kilobytes.',
        'string' => 'La taille de la valeur entrée doit être supérieure ou égale à :value lettres.',
        'array' => 'Le tableau fournie doit avoir un nombre d\'élément supérieur ou égale à :value.',
    ],
    'image' => 'Le fichier chargé doit être une image.',
    'in' => 'La valeur sélectionnée est invalide.',
    'in_array' => 'La valeur entré ne figure pas dans :other.',
    'integer' => 'La valeur entrée doit être un entier.',
    'ip' => 'La valeur entrée n\'est pas une adresse IP valide.',
    'ipv4' => 'La valeur entrée n\'est pas une adresse IPV4 valide.',
    'ipv6' => 'La valeur entrée n\'est pas une adresse IPV6 valide.',
    'json' => 'La valeur entrée n\'est pas un JSON.',
    'lt' => [
        'numeric' => 'La valeur fournie doit être inférieure à :value.',
        'file' => 'La taille du fichier chargé doit être inférieure à :value kilobytes.',
        'string' => 'La taille de la valeur entrée doit être inférieure à :value lettres.',
        'array' => 'Le tableau fournie doit avoir un nombre d\'élément inférieur ou égale à :value.',
    ],
    'lte' => [
        'numeric' => 'La valeur fournie doit être inférieure ou égale à :value.',
        'file' => 'La taille du fichier chargé doit être inférieure ou égale à :value kilobytes.',
        'string' => 'La taille de la valeur entrée doit être inférieure ou égale à :value lettres.',
        'array' => 'Le tableau fournie doit avoir un nombre d\'élément inférieur ou égale à :value.',
    ],
    'mac_address' => 'La valeur entrée n\'est pas une adresse MAC valide.',
    'max' => [
        'numeric' => 'La valeur à fournir ne doit être supérieure à :value.',
        'file' => 'La taille du fichier à charger ne doit être supérieure à :value kilobytes.',
        'string' => 'La taille de la valeur entrée ne doit être supérieure à :value lettres.',
        'array' => 'Le tableau fournie ne doit avoir un nombre d\'élément supérieur à :value.',
    ],
    'mimes' => 'Le fichier chargé doit être de type: :values.',
    'mimetypes' => 'Le fichier chargé doit être d\'un des types suivants: :values.',
    'min' => [
        'numeric' => 'La valeur fournie doit être supérieure ou égale à :value.',
        'file' => 'La taille du fichier chargé doit être supérieure ou égale à :value kilobytes.',
        'string' => 'La taille de la valeur entrée doit être supérieure ou égale à :value lettres.',
        'array' => 'Le tableau fournie doit avoir un nombre d\'élément supérieur ou égale à :value.',
    ],
    'multiple_of' => 'La valeur à fournir doit être un multiple de :value.',
    'not_in' => 'La valeur sélectionnée est invalide.',
    'not_regex' => 'Le format de la valeur sélectionnée est invalide.',
    'numeric' => 'Vous devez fournir une valeur numérique.',
    'password' => 'Le mot de passe entré n\'est pas valide.',
    'present' => 'Le champ :attribute doit être présent.',
    'prohibited' => 'Le champ :attribute est interdit.',
    'prohibited_if' => 'Le champ :attribute est interdit si :other est égale à :value.',
    'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other soit dans la liste :values.',
    'prohibits' => 'Le champ :attribute interdit la présence de :other.',
    'regex' => 'Le format de la valeur fournie est invalide.',
    'required' => 'Ce champ est obligatoire.',
    'required_array_keys' => 'Ce champ contenir des valeurs pour les éléments suivants: :values.',
    'required_if' => 'Ce champ est obligatoire si :other est égale :value.',
    'required_unless' => 'Ce champ est obligatoire à moins que :other soit parmis les éléments suivants :values.',
    'required_with' => 'Ce champ est obligatoire que si :values est présent.',
    'required_with_all' => 'Ce champ est obligatoire que si :values sont présents.',
    'required_without' => 'Ce champ est obligatoire que si :value n\'est pas présent.',
    'required_without_all' => 'Ce champ est obligatoire que si aucune des valeurs :values n\'est présent.',
    'same' => 'La valeur de champ et celle du champ précédent sont présent.',
    'size' => [
        'numeric' => 'La taille de la valeur entrée doit être :size.',
        'file' => 'La taille de fichier à chargé doit être de :size kilobytes.',
        'string' => 'La taille de la chaine de caractères doit être de :size lettre(s).',
        'array' => 'Le tableau fournie ne doit contenir que :size élément(s).',
    ],
    'starts_with' => 'La valeur à fournir doit commencer par l\'un des éléments suivants: :values.',
    'string' => 'La valeur à fournir doit être une chaîne de caractères.',
    'timezone' => 'La valeur à fournir doit être une timezone valide.',
    'unique' => 'La valeur fournie est déjà prise.',
    'uploaded' => 'Le chargement du fichier a échoué.',
    'url' => 'La valeur fournie n\'est pas une URL valide.',
    'uuid' => 'La valeur fournie n\'est pas un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
