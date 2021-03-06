<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('no', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien må være usann.',
    'This value should be true.' => 'Verdien må være sann.',
    'This value should be of type {{ type }}.' => 'Verdien skal ha typen {{ type }}.',
    'This value should be blank.' => 'Verdien skal være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte verdien er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maks velge {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'En eller flere av de oppgitte verdiene er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikke en gyldig dato/tid.',
    'This value is not a valid email address.' => 'Verdien er ikke en gyldig e-postadresse.',
    'The file could not be found.' => 'Filen kunne ikke finnes.',
    'The file is not readable.' => 'Filen er ikke lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilatte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen av filen er ugyldig ({{ type }}). Tilatte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må være {{ limit }} tegn lang eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må ha {{ limit }} tegn eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må være {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Verdien kan ikke være blank.',
    'This value should not be null.' => 'Verdien kan ikke være tom (null).',
    'This value should be null.' => 'Verdien skal være tom (null).',
    'This value is not valid.' => 'Verdien er ugyldig.',
    'This value is not a valid time.' => 'Verdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Verdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'Verdiene skal være identiske.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelsen er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke lastes opp.',
    'This value should be a valid number.' => 'Verdien skal være et gyldig tall.',
    'This file is not a valid image.' => 'Denne filen er ikke et gyldig bilde.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Verdien er ikke et gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Verdien er ikke et gyldig navn på land.',
    'This value is already used.' => 'Verdien er allerede brukt.',
    'The size of the image could not be detected.' => 'Bildestørrelsen kunne ikke oppdages.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildebredden er for stor ({{ width }} piksler). Tillatt maksimumsbredde er {{ max_width }} piksler.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildebredden er for liten ({{ width }} piksler). Forventet minimumsbredde er {{ min_width }} piksler.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildehøyden er for stor ({{ height }} piksler). Tillatt maksimumshøyde er {{ max_height }} piksler.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildehøyden er for liten ({{ height }} piksler). Forventet minimumshøyde er {{ min_height }} piksler.',
    'This value should be the user\'s current password.' => 'Verdien skal være brukerens sitt nåværende passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien skal være nøyaktig {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen var kun delvis opplastet.',
    'No file was uploaded.' => 'Ingen fil var lastet opp.',
    'No temporary folder was configured in php.ini.' => 'Den midlertidige mappen (tmp) er ikke konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-utvidelse forårsaket en feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlingen må inneholde {{ limit }} element eller flere.|Denne samlingen må inneholde {{ limit }} elementer eller flere.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlingen må inneholde {{ limit }} element eller færre.|Denne samlingen må inneholde {{ limit }} elementer eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlingen må inneholde nøyaktig {{ limit }} element.|Denne samlingen må inneholde nøyaktig {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikke støttet eller kortnummeret er ugyldig.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dette er ikke et gyldig IBAN-nummer.',
    'This value is not a valid ISBN-10.' => 'Verdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Verdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Verdien er hverken en gyldig ISBN-10 eller ISBN-13.',
    'This value is not a valid ISSN.' => 'Verdien er ikke en gyldig ISSN.',
    'This value is not a valid currency.' => 'Verdien er ikke gyldig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Verdien skal være lik {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Verdien skal være større enn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Verdien skal være større enn eller lik {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien skal være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Verdien skal være mindre enn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Verdien skal være mindre enn eller lik {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Verdien skal ikke være lik {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien skal ikke være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Bildeforholdet er for stort ({{ ratio }}). Tillatt bildeforhold er maks {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Bildeforholdet er for lite ({{ ratio }}). Forventet bildeforhold er minst {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bildet er en kvadrat ({{ width }}x{{ height }}px). Kvadratiske bilder er ikke tillatt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bildet er i liggende retning ({{ width }}x{{ height }}px). Bilder i liggende retning er ikke tillatt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bildet er i stående retning ({{ width }}x{{ height }}px). Bilder i stående retning er ikke tillatt.',
    'An empty file is not allowed.' => 'Tomme filer er ikke tilatt.',
    'The host could not be resolved.' => 'Vertsnavn kunne ikke løses.',
    'This value does not match the expected {{ charset }} charset.' => 'Verdien samsvarer ikke med forventet tegnsett {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dette er ikke en gyldig BIC.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke inneholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den opplastede filen var for stor. Vennligst last opp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF nøkkelen er ugyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En autentiseringsfeil har skjedd.',
    'Authentication credentials could not be found.' => 'Påloggingsinformasjonen kunne ikke bli funnet.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiserings forespørselen kunne ikke bli prosessert grunnet en system feil.',
    'Invalid credentials.' => 'Ugyldig påloggingsinformasjonen.',
    'Cookie has already been used by someone else.' => 'Cookie har allerede blitt brukt av noen andre.',
    'Not privileged to request the resource.' => 'Ingen tilgang til å be om gitt ressurs.',
    'Invalid CSRF token.' => 'Ugyldig CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce er utløpt.',
    'No authentication provider found to support the authentication token.' => 'Ingen autentiserings tilbyder funnet som støtter gitt autentiserings token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengelig, sesjonen er enten utløpt eller cookies ikke skrudd på.',
    'No token could be found.' => 'Ingen token kunne bli funnet.',
    'Username could not be found.' => 'Brukernavn kunne ikke bli funnet.',
    'Account has expired.' => 'Brukerkonto har utgått.',
    'Credentials have expired.' => 'Påloggingsinformasjon har utløpt.',
    'Account is disabled.' => 'Brukerkonto er deaktivert.',
    'Account is locked.' => 'Brukerkonto er sperret.',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administrasjon',
    'action_delete' => 'Slett',
    'btn_batch' => 'OK',
    'btn_create' => 'Opprett',
    'btn_create_and_edit_again' => 'Lagre',
    'btn_create_and_create_a_new_one' => 'Lagre og legg til ny',
    'btn_create_and_return_to_list' => 'Lagre og returner til liste',
    'btn_filter' => 'Filtrer',
    'btn_advanced_filters' => 'Avanserte filter',
    'btn_update' => 'Oppdater',
    'btn_update_and_edit_again' => 'Oppdater og rediger videre',
    'btn_update_and_return_to_list' => 'Oppdater og returner til liste',
    'link_delete' => 'Slett',
    'link_action_create' => 'Lag ny',
    'link_action_list' => 'Returner til liste',
    'link_action_show' => 'Vis',
    'link_action_edit' => 'Endre',
    'link_add' => 'Legg til ny',
    'link_list' => 'Liste',
    'link_reset_filter' => 'Tøm filter',
    'title_create' => 'Lag ny',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Endre "%name%"',
    'title_list' => 'Liste',
    'link_next_pager' => 'Neste',
    'link_previous_pager' => 'Forrige',
    'link_first_pager' => 'Første',
    'link_last_pager' => 'Siste',
    'Admin' => 'Admin',
    'link_expand' => 'utvid/skjul',
    'no_result' => 'Ingen treff',
    'confirm_msg' => 'Er du sikker?',
    'action_edit' => 'Endre',
    'action_show' => 'Vis',
    'all_elements' => 'Alle element',
    'flash_batch_empty' => 'Handling kansellert. Ingen objekt ble valgt.',
    'flash_create_success' => 'Objekt "%name%" har blitt opprettet',
    'flash_create_error' => 'Det skjedde en feil under oppretting av "%name%".',
    'flash_edit_success' => 'Objekt "%name%" Har blitt oppdatert',
    'flash_edit_error' => 'Det skjedde en feil under oppdatering av "%name%".',
    'flash_lock_error' => 'flash_lock_error',
    'flash_batch_delete_success' => 'Valgte objekt har blitt slettet',
    'flash_batch_delete_error' => 'Det oppstod en feil under sletting av objekter',
    'flash_delete_error' => 'Det oppstod en feil under sletting av objektet "%name%".',
    'flash_delete_success' => 'Objektet "%name%" har blitt slettet',
    'form_not_available' => 'form_not_available',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Bekreft sletting',
    'message_delete_confirmation' => 'Er du sikker på at du vil slette det valgte objektet"%object%" ?',
    'btn_delete' => 'Ja, slett',
    'title_batch_confirmation' => 'Bekreft flerhandling: \'%action%\'',
    'message_batch_confirmation' => 'Er du sikker på at du vil bekrefte denne handlingen og utføre den for det valgte elementet?|Er du sikker på at du vil bekrefte denne handlingen og utføre den for de %count% valgte elementene?',
    'message_batch_all_confirmation' => 'Er du sikker på at du vil bekrefte denne handlingen for alle elementene?',
    'btn_execute_batch_action' => 'Ja, utfør',
    'label_type_yes' => 'Ja',
    'label_type_no' => 'Nei',
    'label_type_contains' => 'inneholder',
    'label_type_not_contains' => 'inneholder ikke',
    'label_type_equals' => 'er lik som',
    'label_type_not_equals' => 'er ikke lik som',
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
    'label_date_type_null' => 'er tom',
    'label_date_type_not_null' => 'er ikke tom',
    'label_date_type_between' => 'mellom',
    'label_date_type_not_between' => 'ikke mellom',
    'label_filters' => 'Filter',
    'delete_or' => 'eller',
    'link_action_history' => 'Revisjoner',
    'td_action' => 'Handling',
    'td_compare' => 'Sammenlign',
    'td_revision' => 'Revisjoner',
    'td_timestamp' => 'Dato',
    'td_username' => 'Bruker',
    'td_role' => 'Rolle',
    'label_view_revision' => 'Se revisjon',
    'label_compare_revision' => 'Sammenlign revisjoner',
    'list_results_count_prefix' => 'minimum',
    'list_results_count' => '1 resultat|%count% resultat',
    'label_export_download' => 'Last ned',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Laster informasjon…',
    'btn_preview' => 'Forhondsvis',
    'btn_preview_approve' => 'Godkjenn',
    'btn_preview_decline' => 'Avvis',
    'label_per_page' => 'Per side',
    'list_select' => 'Velg',
    'confirm_exit' => 'Du har ulagrede endringer.',
    'link_edit_acl' => 'Endre ACL',
    'btn_update_acl' => 'Oppdater ACL',
    'flash_acl_edit_success' => 'ACL har blitt endret.',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Ingen utvalg',
    'title_search_results' => 'Søkeresultat: %query%',
    'search_placeholder' => 'Søk',
    'no_results_found' => 'Ingen resultat funnet',
    'add_new_entry' => 'Legg til ny',
    'link_actions' => 'Handlinger',
    'noscript_warning' => 'Javascript er skrudd av i din nettleser. Noen funksjoner vil ikke virke.',
    'message_form_group_empty' => 'Ingen felt tilgjengelige',
    'link_filters' => 'Filter',
    'stats_view_more' => 'stats_view_more',
    'title_select_subclass' => 'Velg objekttype',
    'no_subclass_available' => 'Ingen objektttyper er tilgjengelige',
    'label_unknown_user' => 'label_unknown_user',
    'read_more' => 'read_more',
    'read_less' => 'read_less',
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
