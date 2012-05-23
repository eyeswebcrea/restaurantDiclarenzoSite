<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false' => 'Cette valeur doit être fausse',
    'This value should be true' => 'Cette valeur doit être vraie',
    'This value should be of type {{ type }}' => 'Cette valeur doit être de type {{ type }}',
    'This value should be blank' => 'Cette valeur doit être vide',
    'The value you selected is not a valid choice' => 'Cette valeur doit être l\'un des choix proposés',
    'You must select at least {{ limit }} choices' => 'Vous devez sélectionner au moins {{ limit }} choix',
    'You must select at most {{ limit }} choices' => 'Vous devez sélectionner au maximum {{ limit }} choix',
    'One or more of the given values is invalid' => 'Une ou plusieurs des valeurs soumises sont invalides',
    'The fields {{ fields }} were not expected' => 'Les champs {{ fields }} n\'ont pas été prévus',
    'The fields {{ fields }} are missing' => 'Les champs {{ fields }} sont manquants',
    'This value is not a valid date' => 'Cette valeur n\'est pas une date valide',
    'This value is not a valid datetime' => 'Cette valeur n\'est pas une date valide',
    'This value is not a valid email address' => 'Cette valeur n\'est pas une adresse email valide',
    'The file could not be found' => 'Le fichier n\'a pas été trouvé',
    'The file is not readable' => 'Le fichier n\'est pas lisible',
    'The file is too large ({{ size }}). Allowed maximum size is {{ limit }}' => 'Le fichier est trop volumineux ({{ size }}). Sa taille ne doit pas dépasser {{ limit }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}',
    'This value should be {{ limit }} or less' => 'Cette valeur doit être inférieure ou égale à {{ limit }}',
    'This value is too long. It should have {{ limit }} characters or less' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères',
    'This value should be {{ limit }} or more' => 'Cette valeur doit être supérieure ou égale à {{ limit }}',
    'This value is too short. It should have {{ limit }} characters or more' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères',
    'This value should not be blank' => 'Cette valeur ne doit pas être vide',
    'This value should not be null' => 'Cette valeur ne doit pas être nulle',
    'This value should be null' => 'Cette valeur doit être nulle',
    'This value is not valid' => 'Cette valeur n\'est pas valide',
    'This value is not a valid time' => 'Cette valeur n\'est pas une heure valide',
    'This value is not a valid URL' => 'Cette valeur n\'est pas une URL valide',
    'This form should not contain extra fields' => 'Ce formulaire ne doit pas contenir des champs supplémentaires',
    'The uploaded file was too large. Please try to upload a smaller file' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit',
    'The CSRF token is invalid. Please try to resubmit the form' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire',
    'The two values should be equal' => 'Les deux valeurs doivent être identiques',
    'The file is too large. Allowed maximum size is {{ limit }}' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }}',
    'The file is too large' => 'Le fichier est trop volumineux',
    'The file could not be uploaded' => 'Le téléchargement de ce fichier est impossible',
    'This value should be a valid number' => 'Cette valeur doit être un nombre',
    'This file is not a valid image' => 'Ce fichier n\'est pas une image valide',
    'This is not a valid IP address' => 'Cette adresse IP n\'est pas valide',
    'This value is not a valid language' => 'Cette langue n\'est pas valide',
    'This value is not a valid locale' => 'Ce paramètre régional n\'est pas valide',
    'This value is not a valid country' => 'Ce pays n\'est pas valide',
    'This value is already used' => 'Cette valeur est déjà utilisée',
  ),
  'messages' => 
  array (
    'Symfony2 is great' => 'J\'aime Symfony2',
    'Senderemail' => 'Email',
    'Sendername' => 'Nom',
    'Subject' => 'Sujet',
    'Message' => 'Message',
    'Submit contact form' => 'Envoyer le message',
  ),
));

$catalogue->addFallbackCatalogue(new MessageCatalogue('en', array (
  'messages' => 
  array (
    'Senderemail' => 'Your email',
    'Sendername' => 'Your name',
    'Subject' => 'Subject',
    'Message' => 'Message',
  ),
)));

return $catalogue;
