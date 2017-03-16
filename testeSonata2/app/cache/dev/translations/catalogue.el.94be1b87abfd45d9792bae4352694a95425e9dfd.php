<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('el', array (
  'validators' => 
  array (
    'This value should be false.' => 'Αυτή η τιμή πρέπει να είναι ψευδής.',
    'This value should be true.' => 'Αυτή η τιμή πρέπει να είναι αληθής.',
    'This value should be of type {{ type }}.' => 'Αυτή η τιμή πρέπει να είναι τύπου {{ type }}.',
    'This value should be blank.' => 'Αυτή η τιμή πρέπει να είναι κενή.',
    'The value you selected is not a valid choice.' => 'Η τιμή που επιλέχθηκε δεν αντιστοιχεί σε έγκυρη επιλογή.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογή.|Πρέπει να επιλέξετε τουλάχιστον {{ limit }} επιλογές.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογή.|Πρέπει να επιλέξετε το πολύ {{ limit }} επιλογές.',
    'One or more of the given values is invalid.' => 'Μια ή περισσότερες τιμές δεν είναι έγκυρες.',
    'This field was not expected.' => 'Αυτό το πεδίο δεν ήταν αναμενόμενο.',
    'This field is missing.' => 'Λείπει αυτό το πεδίο.',
    'This value is not a valid date.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία.',
    'This value is not a valid datetime.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρη ημερομηνία και ώρα.',
    'This value is not a valid email address.' => 'Η τιμή δεν αντιστοιχεί σε έγκυρο email.',
    'The file could not be found.' => 'Το αρχείο δε μπορεί να βρεθεί.',
    'The file is not readable.' => 'Το αρχείο δεν είναι αναγνώσιμο.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο ({{ size }} {{ suffix }}). Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Ο τύπος mime του αρχείου δεν είναι έγκυρος ({{ type }}). Οι έγκρυοι τύποι mime είναι {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή λιγότερο.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή λιγότερο.|Αυτή η τιμή είναι πολύ μεγάλη. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή λιγότερο.',
    'This value should be {{ limit }} or more.' => 'Αυτή η τιμή θα έπρεπε να είναι {{ limit }} ή περισσότερο.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρα ή περισσότερο.|Αυτή η τιμή είναι πολύ μικρή. Θα έπρεπε να έχει {{ limit }} χαρακτήρες ή περισσότερο.',
    'This value should not be blank.' => 'Αυτή η τιμή δεν πρέπει να είναι κενή.',
    'This value should not be null.' => 'Αυτή η τιμή δεν πρέπει να είναι μηδενική.',
    'This value should be null.' => 'Αυτή η τιμή πρέπει να είναι μηδενική.',
    'This value is not valid.' => 'Αυτή η τιμή δεν είναι έκγυρη.',
    'This value is not a valid time.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρη ώρα.',
    'This value is not a valid URL.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έγκυρο URL.',
    'The two values should be equal.' => 'Οι δύο τιμές θα πρέπει να είναι ίδιες.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Το αρχείο είναι πολύ μεγάλο. Το μέγιστο επιτρεπτό μέγεθος είναι {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Το αρχείο είναι πολύ μεγάλο.',
    'The file could not be uploaded.' => 'Το αρχείο δε μπορεί να ανέβει.',
    'This value should be a valid number.' => 'Αυτή η τιμή θα πρέπει να είναι ένας έγκυρος αριθμός.',
    'This file is not a valid image.' => 'Το αρχείο δεν αποτελεί έγκυρη εικόνα.',
    'This is not a valid IP address.' => 'Αυτό δεν είναι μια έκγυρη διεύθυνση IP.',
    'This value is not a valid language.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έκγυρη γλώσσα.',
    'This value is not a valid locale.' => 'Αυτή η τιμή δεν αντιστοιχεί σε έκγυρο κωδικό τοποθεσίας.',
    'This value is not a valid country.' => 'Αυτή η τιμή δεν αντιστοιχεί σε μια έκγυρη χώρα.',
    'This value is already used.' => 'Αυτή η τιμή χρησιμοποιείται ήδη.',
    'The size of the image could not be detected.' => 'Το μέγεθος της εικόνας δεν ήταν δυνατό να ανιχνευθεί.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μεγάλο ({{ width }}px). Το μέγιστο επιτρεπτό πλάτος είναι {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Το πλάτος της εικόνας είναι πολύ μικρό ({{ width }}px). Το ελάχιστο επιτρεπτό πλάτος είναι {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μεγάλο ({{ height }}px). Το μέγιστο επιτρεπτό ύψος είναι {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Το ύψος της εικόνας είναι πολύ μικρό ({{ height }}px). Το ελάχιστο επιτρεπτό ύψος είναι {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Αυτή η τιμή θα έπρεπε να είναι ο τρέχων κωδικός.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρα.|Αυτή η τιμή θα έπρεπε να έχει ακριβώς {{ limit }} χαρακτήρες.',
    'The file was only partially uploaded.' => 'Το αρχείο δεν ανέβηκε ολόκληρο.',
    'No file was uploaded.' => 'Δεν ανέβηκε κανένα αρχείο.',
    'No temporary folder was configured in php.ini.' => 'Κανένας προσωρινός φάκελος δεν έχει ρυθμιστεί στο php.ini.',
    'Cannot write temporary file to disk.' => 'Αδυναμία εγγραφής προσωρινού αρχείου στο δίσκο.',
    'A PHP extension caused the upload to fail.' => 'Μια επέκταση PHP προκάλεσε αδυναμία ανεβάσματος.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείο ή περισσότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή περισσότερα.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχείo ή λιγότερα.|Αυτή η συλλογή θα πρέπει να περιέχει {{ limit }} στοιχεία ή λιγότερα.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχείo.|Αυτή η συλλογή θα πρέπει να περιέχει ακριβώς {{ limit }} στοιχεία.',
    'Invalid card number.' => 'Μη έγκυρος αριθμός κάρτας.',
    'Unsupported card type or invalid card number.' => 'Μη υποστηριζόμενος τύπος κάρτας ή μη έγκυρος αριθμός κάρτας.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Αυτό δεν αντιστοιχεί σε έκγυρο διεθνή αριθμό τραπεζικού λογαριασμού (IBAN).',
    'This value is not a valid ISBN-10.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Αυτό δεν είναι έγκυρος κωδικός ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Αυτό δεν είναι ούτε έγκυρος κωδικός ISBN-10 ούτε έγκυρος κωδικός ISBN-13.',
    'This value is not a valid ISSN.' => 'Αυτό δεν είναι έγκυρος κωδικός ISSN.',
    'This value is not a valid currency.' => 'Αυτό δεν αντιστοιχεί σε έγκυρο νόμισμα.',
    'This value should be equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη από {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μεγαλύτερη ή ίση με {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη από {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Αυτή η τιμή θα πρέπει να είναι μικρότερη ή ίση με {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Αυτή η τιμή δεν θα πρέπει να είναι ίση με {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Αυτή η τιμή δεν πρέπει να είναι πανομοιότυπη με {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Αυτή η φόρμα δεν πρέπει να περιέχει επιπλέον πεδία.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Το αρχείο είναι πολύ μεγάλο. Παρακαλούμε προσπαθήστε να ανεβάσετε ένα μικρότερο αρχείο.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Το CSRF token δεν είναι έγκυρο. Παρακαλούμε δοκιμάστε να υποβάλετε τη φόρμα ξανά.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Συνέβη ένα σφάλμα πιστοποίησης.',
    'Authentication credentials could not be found.' => 'Τα στοιχεία πιστοποίησης δε βρέθηκαν.',
    'Authentication request could not be processed due to a system problem.' => 'Το αίτημα πιστοποίησης δε μπορεί να επεξεργαστεί λόγω σφάλματος του συστήματος.',
    'Invalid credentials.' => 'Λανθασμένα στοιχεία σύνδεσης.',
    'Cookie has already been used by someone else.' => 'Το Cookie έχει ήδη χρησιμοποιηθεί από κάποιον άλλο.',
    'Not privileged to request the resource.' => 'Δεν είστε εξουσιοδοτημένος για πρόσβαση στο συγκεκριμένο περιεχόμενο.',
    'Invalid CSRF token.' => 'Μη έγκυρο CSRF token.',
    'Digest nonce has expired.' => 'Το digest nonce έχει λήξει.',
    'No authentication provider found to support the authentication token.' => 'Δε βρέθηκε κάποιος πάροχος πιστοποίησης που να υποστηρίζει το token πιστοποίησης.',
    'No session available, it either timed out or cookies are not enabled.' => 'Δεν υπάρχει ενεργή σύνοδος (session), είτε έχει λήξει ή τα cookies δεν είναι ενεργοποιημένα.',
    'No token could be found.' => 'Δεν ήταν δυνατόν να βρεθεί κάποιο token.',
    'Username could not be found.' => 'Το Username δε βρέθηκε.',
    'Account has expired.' => 'Ο λογαριασμός έχει λήξει.',
    'Credentials have expired.' => 'Τα στοιχεία σύνδεσης έχουν λήξει.',
    'Account is disabled.' => 'Ο λογαριασμός είναι απενεργοποιημένος.',
    'Account is locked.' => 'Ο λογαριασμός είναι κλειδωμένος.',
  ),
));

$cataloguePt_BR = new MessageCatalogue('pt_BR', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor deve ser falso.',
    'This value should be true.' => 'Este valor deve ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor deve ser do tipo {{ type }}.',
    'This value should be blank.' => 'Este valor deve ser vazio.',
    'The value you selected is not a valid choice.' => 'O valor selecionado não é uma opção válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Você deve selecionar, no mínimo, {{ limit }} opção.|Você deve selecionar, no mínimo, {{ limit }} opções.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Você deve selecionar, no máximo, {{ limit }} opção.|Você deve selecionar, no máximo, {{ limit }} opções.',
    'One or more of the given values is invalid.' => 'Um ou mais valores informados são inválidos.',
    'This field was not expected.' => 'Este campo não era esperado.',
    'This field is missing.' => 'Este campo está ausente.',
    'This value is not a valid date.' => 'Este valor não é uma data válida.',
    'This value is not a valid datetime.' => 'Este valor não é uma data e hora válida.',
    'This value is not a valid email address.' => 'Este valor não é um endereço de e-mail válido.',
    'The file could not be found.' => 'O arquivo não foi encontrado.',
    'The file is not readable.' => 'O arquivo não pode ser lido.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande ({{ size }} {{ suffix }}). O tamanho máximo permitido é {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo é inválido ({{ type }}). Os tipos mime permitidos são {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor deve ser {{ limit }} ou menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor é muito longo. Deve ter {{ limit }} caractere ou menos.|Este valor é muito longo. Deve ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor deve ser {{ limit }} ou mais.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor é muito curto. Deve ter {{ limit }} caractere ou mais.|Este valor é muito curto. Deve ter {{ limit }} caracteres ou mais.',
    'This value should not be blank.' => 'Este valor não deve ser vazio.',
    'This value should not be null.' => 'Este valor não deve ser nulo.',
    'This value should be null.' => 'Este valor deve ser nulo.',
    'This value is not valid.' => 'Este valor não é válido.',
    'This value is not a valid time.' => 'Este valor não é uma hora válida.',
    'This value is not a valid URL.' => 'Este valor não é uma URL válida.',
    'The two values should be equal.' => 'Os dois valores devem ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande. O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O arquivo é muito grande.',
    'The file could not be uploaded.' => 'O arquivo não pode ser enviado.',
    'This value should be a valid number.' => 'Este valor deve ser um número válido.',
    'This file is not a valid image.' => 'Este arquivo não é uma imagem válida.',
    'This is not a valid IP address.' => 'Este não é um endereço de IP válido.',
    'This value is not a valid language.' => 'Este valor não é um idioma válido.',
    'This value is not a valid locale.' => 'Este valor não é uma localidade válida.',
    'This value is not a valid country.' => 'Este valor não é um país válido.',
    'This value is already used.' => 'Este valor já está sendo usado.',
    'The size of the image could not be detected.' => 'O tamanho da imagem não pode ser detectado.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imagem é muito grande ({{ width }}px). A largura máxima permitida é de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imagem é muito pequena ({{ width }}px). A largura mínima esperada é de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imagem é muito grande ({{ height }}px). A altura máxima permitida é de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imagem é muito pequena ({{ height }}px). A altura mínima esperada é de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor deve ser a senha atual do usuário.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor deve ter exatamente {{ limit }} caractere.|Este valor deve ter exatamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'O arquivo foi enviado apenas parcialmente.',
    'No file was uploaded.' => 'Nenhum arquivo foi enviado.',
    'No temporary folder was configured in php.ini.' => 'Nenhum diretório temporário foi configurado no php.ini.',
    'Cannot write temporary file to disk.' => 'Não foi possível escrever o arquivo temporário no disco.',
    'A PHP extension caused the upload to fail.' => 'Uma extensão PHP fez com que o envio falhasse.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta coleção deve conter {{ limit }} elemento ou mais.|Esta coleção deve conter {{ limit }} elementos ou mais.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta coleção deve conter {{ limit }} elemento ou menos.|Esta coleção deve conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta coleção deve conter exatamente {{ limit }} elemento.|Esta coleção deve conter exatamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de cartão inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de cartão não suportado ou número de cartão inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este não é um Número Internacional de Conta Bancária (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor não é um ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor não é um ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor não é um ISBN-10 e nem um ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor não é um ISSN válido.',
    'This value is not a valid currency.' => 'Este não é um valor monetário válido.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor deve ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor deve ser maior que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor deve ser maior ou igual a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor deve ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor deve ser menor ou igual a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor não deve ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor não deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A proporção da imagem é muito grande ({{ ratio }}). A proporção máxima permitida é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A proporção da imagem é muito pequena ({{ ratio }}). A proporção mínima esperada é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imagem está num formato quadrado ({{ width }}x{{ height }}px). Imagens com formato quadrado não são permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imagem está orientada à paisagem ({{ width }}x{{ height }}px). Imagens orientadas à paisagem não são permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imagem está orientada ao retrato ({{ width }}x{{ height }}px). Imagens orientadas ao retrato não são permitidas.',
    'An empty file is not allowed.' => 'Arquivo vazio não é permitido.',
    'The host could not be resolved.' => 'O host não pôde ser resolvido.',
    'This value does not match the expected {{ charset }} charset.' => 'Este valor não corresponde ao charset {{ charset }} esperado.',
    'This is not a valid Business Identifier Code (BIC).' => 'Este não é um Código Identificador Bancário (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulário não deve conter campos adicionais.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um arquivo menor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor, tente reenviar o formulário.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Uma exceção ocorreu durante a autenticação.',
    'Authentication credentials could not be found.' => 'As credenciais de autenticação não foram encontradas.',
    'Authentication request could not be processed due to a system problem.' => 'A autenticação não pôde ser concluída devido a um problema no sistema.',
    'Invalid credentials.' => 'Credenciais inválidas.',
    'Cookie has already been used by someone else.' => 'Este cookie já está em uso.',
    'Not privileged to request the resource.' => 'Não possui privilégios o bastante para requisitar este recurso.',
    'Invalid CSRF token.' => 'Token CSRF inválido.',
    'Digest nonce has expired.' => 'Digest nonce expirado.',
    'No authentication provider found to support the authentication token.' => 'Nenhum provedor de autenticação encontrado para suportar o token de autenticação.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nenhuma sessão disponível, ela expirou ou os cookies estão desativados.',
    'No token could be found.' => 'Nenhum token foi encontrado.',
    'Username could not be found.' => 'Nome de usuário não encontrado.',
    'Account has expired.' => 'A conta está expirada.',
    'Credentials have expired.' => 'As credenciais estão expiradas.',
    'Account is disabled.' => 'Conta desativada.',
    'Account is locked.' => 'A conta está travada.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Adicionar novo',
    'label_type_yes' => 'sim',
    'label_type_no' => 'não',
    'sonata_core_template_box_file_found_in' => 'sonata_core_template_box_file_found_in',
    'label_type_equals' => 'é igual a',
    'label_type_not_equals' => 'não é igual a',
    'date_range_start' => 'date_range_start',
    'date_range_end' => 'date_range_end',
    'aliceblue' => 'aliceblue',
    'antiquewhite' => 'antiquewhite',
    'aqua' => 'aqua',
    'aquamarine' => 'aquamarine',
    'azure' => 'azure',
    'beige' => 'beige',
    'bisque' => 'bisque',
    'black' => 'black',
    'blanchedalmond' => 'blanchedalmond',
    'blue' => 'blue',
    'blueviolet' => 'blueviolet',
    'brown' => 'brown',
    'burlywood' => 'burlywood',
    'cadetblue' => 'cadetblue',
    'chartreuse' => 'chartreuse',
    'chocolate' => 'chocolate',
    'coral' => 'coral',
    'cornflowerblue' => 'cornflowerblue',
    'cornsilk' => 'cornsilk',
    'crimson' => 'crimson',
    'cyan' => 'cyan',
    'darkblue' => 'darkblue',
    'darkcyan' => 'darkcyan',
    'darkgoldenrod' => 'darkgoldenrod',
    'darkgray' => 'darkgray',
    'darkgreen' => 'darkgreen',
    'darkkhaki' => 'darkkhaki',
    'darkmagenta' => 'darkmagenta',
    'darkolivegreen' => 'darkolivegreen',
    'darkorange' => 'darkorange',
    'darkorchid' => 'darkorchid',
    'darkred' => 'darkred',
    'darksalmon' => 'darksalmon',
    'darkseagreen' => 'darkseagreen',
    'darkslateblue' => 'darkslateblue',
    'darkslategray' => 'darkslategray',
    'darkturquoise' => 'darkturquoise',
    'darkviolet' => 'darkviolet',
    'deeppink' => 'deeppink',
    'deepskyblue' => 'deepskyblue',
    'dimgray' => 'dimgray',
    'dodgerblue' => 'dodgerblue',
    'firebrick' => 'firebrick',
    'floralwhite' => 'floralwhite',
    'forestgreen' => 'forestgreen',
    'fuchsia' => 'fuchsia',
    'gainsboro' => 'gainsboro',
    'ghostwhite' => 'ghostwhite',
    'gold' => 'gold',
    'goldenrod' => 'goldenrod',
    'gray' => 'gray',
    'green' => 'green',
    'greenyellow' => 'greenyellow',
    'honeydew' => 'honeydew',
    'hotpink' => 'hotpink',
    'indianred' => 'indianred',
    'indigo' => 'indigo',
    'ivory' => 'ivory',
    'khaki' => 'khaki',
    'lavender' => 'lavender',
    'lavenderblush' => 'lavenderblush',
    'lawngreen' => 'lawngreen',
    'lemonchiffon' => 'lemonchiffon',
    'lightblue' => 'lightblue',
    'lightcoral' => 'lightcoral',
    'lightcyan' => 'lightcyan',
    'lightgoldenrodyellow' => 'lightgoldenrodyellow',
    'lightgray' => 'lightgray',
    'lightgreen' => 'lightgreen',
    'lightpink' => 'lightpink',
    'lightsalmon' => 'lightsalmon',
    'lightseagreen' => 'lightseagreen',
    'lightskyblue' => 'lightskyblue',
    'lightslategray' => 'lightslategray',
    'lightsteelblue' => 'lightsteelblue',
    'lightyellow' => 'lightyellow',
    'lime' => 'lime',
    'limegreen' => 'limegreen',
    'linen' => 'linen',
    'magenta' => 'magenta',
    'maroon' => 'maroon',
    'mediumaquamarine' => 'mediumaquamarine',
    'mediumblue' => 'mediumblue',
    'mediumorchid' => 'mediumorchid',
    'mediumpurple' => 'mediumpurple',
    'mediumseagreen' => 'mediumseagreen',
    'mediumslateblue' => 'mediumslateblue',
    'mediumspringgreen' => 'mediumspringgreen',
    'mediumturquoise' => 'mediumturquoise',
    'mediumvioletred' => 'mediumvioletred',
    'midnightblue' => 'midnightblue',
    'mintcream' => 'mintcream',
    'mistyrose' => 'mistyrose',
    'moccasin' => 'moccasin',
    'navajowhite' => 'navajowhite',
    'navy' => 'navy',
    'oldlace' => 'oldlace',
    'olive' => 'olive',
    'olivedrab' => 'olivedrab',
    'orange' => 'orange',
    'orangered' => 'orangered',
    'orchid' => 'orchid',
    'palegoldenrod' => 'palegoldenrod',
    'palegreen' => 'palegreen',
    'paleturquoise' => 'paleturquoise',
    'palevioletred' => 'palevioletred',
    'papayawhip' => 'papayawhip',
    'peachpuff' => 'peachpuff',
    'peru' => 'peru',
    'pink' => 'pink',
    'plum' => 'plum',
    'powderblue' => 'powderblue',
    'purple' => 'purple',
    'rebeccapurple' => 'rebeccapurple',
    'red' => 'red',
    'rosybrown' => 'rosybrown',
    'royalblue' => 'royalblue',
    'saddlebrown' => 'saddlebrown',
    'salmon' => 'salmon',
    'sandybrown' => 'sandybrown',
    'seagreen' => 'seagreen',
    'seashell' => 'seashell',
    'sienna' => 'sienna',
    'silver' => 'silver',
    'skyblue' => 'skyblue',
    'slateblue' => 'slateblue',
    'slategray' => 'slategray',
    'snow' => 'snow',
    'springgreen' => 'springgreen',
    'steelblue' => 'steelblue',
    'tan' => 'tan',
    'teal' => 'teal',
    'thistle' => 'thistle',
    'tomato' => 'tomato',
    'turquoise' => 'turquoise',
    'violet' => 'violet',
    'wheat' => 'wheat',
    'white' => 'white',
    'whitesmoke' => 'whitesmoke',
    'yellow' => 'yellow',
    'yellowgreen' => 'yellowgreen',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administração',
    'action_delete' => 'Excluir',
    'btn_batch' => 'OK',
    'btn_create' => 'Criar',
    'btn_create_and_edit_again' => 'Criar',
    'btn_create_and_create_a_new_one' => 'Criar e adicionar outro',
    'btn_create_and_return_to_list' => 'Criar e retornar para a lista',
    'btn_filter' => 'Filtrar',
    'btn_advanced_filters' => 'Fitros Avançados',
    'btn_update' => 'Atualizar',
    'btn_update_and_edit_again' => 'Atualizar',
    'btn_update_and_return_to_list' => 'Atualizar e sair',
    'link_delete' => 'Deletar',
    'link_action_create' => 'Adicionar novo',
    'link_action_list' => 'Retornar para a listagem',
    'link_action_show' => 'Exibir',
    'link_action_edit' => 'Editar',
    'link_add' => 'Adicionar novo',
    'link_list' => 'Listar',
    'link_reset_filter' => 'Limpar Filtros',
    'title_create' => 'Criar',
    'title_dashboard' => 'Visão Geral',
    'title_edit' => 'Editar "%name%"',
    'title_list' => 'Listar',
    'link_next_pager' => 'Próximo',
    'link_previous_pager' => 'Anterior',
    'link_first_pager' => 'Primeiro',
    'link_last_pager' => 'Último',
    'Admin' => 'Admin',
    'link_expand' => 'Expandir/Contrair',
    'no_result' => 'Nenhum resultado',
    'confirm_msg' => 'Você tem certeza?',
    'action_edit' => 'Editar',
    'action_show' => 'Exibir',
    'all_elements' => 'Todos os elementos',
    'flash_batch_empty' => 'Ação abortada. Nenhum item foi selecionado.',
    'flash_create_success' => 'O item "%name%" foi criado com sucesso.',
    'flash_create_error' => 'Um erro ocorreu durante a criação do item "%name%".',
    'flash_edit_success' => 'O item foi atualizado com sucesso.',
    'flash_edit_error' => 'Um erro ocorreu durante a atualização do item.',
    'flash_lock_error' => 'Outro usuário modificou o item "%name%". Por favor, %link_start%clique aqui%link_end% para recarregar a página e aplicar as mudanças novamente.',
    'flash_batch_delete_success' => 'Itens selecionados foram deletados com sucesso.',
    'flash_batch_delete_error' => 'Um erro ocorreu durante a remoção dos itens selecionados.',
    'flash_delete_error' => 'Um erro ocorreu durante a remoção do item.',
    'flash_delete_success' => 'O item foi removido com sucesso.',
    'form_not_available' => 'O formulário não está disponível',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Confirmar a remoção',
    'message_delete_confirmation' => 'Você tem certeza que deseja remover o item "%object%" selecionado?',
    'btn_delete' => 'Sim, remover',
    'title_batch_confirmation' => 'Confirmar ação em massa',
    'message_batch_confirmation' => 'Você tem certeza que deseja executar isso para o elemento selecionado?|Você tem certeza que deseja executar a ação para os %count% elementos selecionados?',
    'message_batch_all_confirmation' => 'Você tem certeza que deseja executar essa ação para todos os elementos?',
    'btn_execute_batch_action' => 'Sim, executar',
    'label_type_yes' => 'sim',
    'label_type_no' => 'não',
    'label_type_contains' => 'contém',
    'label_type_not_contains' => 'não contém',
    'label_type_equals' => 'é igual a',
    'label_type_not_equals' => 'não é igual a',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'é vazio',
    'label_date_type_not_null' => 'não é vazio',
    'label_date_type_between' => 'entre',
    'label_date_type_not_between' => 'não está entre',
    'label_filters' => 'Filtro',
    'delete_or' => 'ou',
    'link_action_history' => 'Revisões',
    'td_action' => 'Ação',
    'td_compare' => 'Comparar',
    'td_revision' => 'Revisão',
    'td_timestamp' => 'Data',
    'td_username' => 'Autor',
    'td_role' => 'Função',
    'label_view_revision' => 'Ver revisão',
    'label_compare_revision' => 'Comparar revisão',
    'list_results_count_prefix' => 'pelo menos',
    'list_results_count' => '1 resultado|%count% resultados',
    'label_export_download' => 'Download',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Carregando…',
    'btn_preview' => 'Pré-visualização',
    'btn_preview_approve' => 'Aprovar',
    'btn_preview_decline' => 'Rejeitar',
    'label_per_page' => 'Por página',
    'list_select' => 'Selecionar',
    'confirm_exit' => 'Você tem mudanças não salvas.',
    'link_edit_acl' => 'Editar ACL',
    'btn_update_acl' => 'Atualizar ACL',
    'flash_acl_edit_success' => 'ACL foi atualizada com sucesso.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Nenhuma seleção',
    'title_search_results' => 'Resultados da busca: %query%',
    'search_placeholder' => 'Busca',
    'no_results_found' => 'nenhum resultado encontrado',
    'add_new_entry' => 'Adicionar novo item',
    'link_actions' => 'Ações',
    'noscript_warning' => 'Javascript está desativado no seu navegador. Algumas recursos não funcionarão corretamente.',
    'message_form_group_empty' => 'Nenhum campo disponível',
    'link_filters' => 'Filtros',
    'stats_view_more' => 'Ver mais',
    'title_select_subclass' => 'Selecione o tipo do objeto',
    'no_subclass_available' => 'Nenhum tipo de objeto disponível',
    'label_unknown_user' => 'Usuário desconhecido',
    'read_more' => 'read_more',
    'read_less' => 'read_less',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePt_BR);

return $catalogue;
