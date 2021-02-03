<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$toAll = [
    'j.conan@fondationface.org',
    'unsolo@hotmail.fr',
];

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                Nous sommes le mardi 02 fevrier 2021, ce soir je fais des crêpes pour la chandeleur.
            </div>
        </body>
    </html>
';

$subject = 'actualités';

$headers = [
    'Reply-To' => 'jojo@outlook.fr',
    'X-Mailer' => 'PHP/'.phpversion(),
    'Mime-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf-8'
];

foreach ($toAll as $to){
    $send = mail($to, $subject, $html, $headers, '-f jojo@outlook.fr');
    if($send){
        echo "Le message a bien été envoyé à $to";
    }
    else{
        echo "Le message à $to n'a pas été envoyé";
    }
}

