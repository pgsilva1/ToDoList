<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vi', array (
  'validators' => 
  array (
    'This value should be false.' => 'Giá trị này phải là sai.',
    'This value should be true.' => 'Giá trị này phải là đúng.',
    'This value should be of type {{ type }}.' => 'Giá trị này phải là kiểu  {{ type }}.',
    'This value should be blank.' => 'Giá trị này phải rỗng.',
    'The value you selected is not a valid choice.' => 'Giá trị bạn vừa chọn không hợp lệ.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Bạn phải chọn ít nhất {{ limit }} lựa chọn.|Bạn phải chọn ít nhất {{ limit }} lựa chọn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Bạn phải chọn nhiều nhất {{ limit }} lựa chọn.|Bạn phải chọn nhiều  nhất {{ limit }} lựa chọn.',
    'One or more of the given values is invalid.' => 'Một hoặc nhiều giá trị được chọn không hợp lệ.',
    'This field was not expected.' => 'Lĩnh vực này không được dự kiến.',
    'This field is missing.' => 'Lĩnh vực này là mất tích.',
    'This value is not a valid date.' => 'Giá trị không phải là ngày hợp lệ.',
    'This value is not a valid datetime.' => 'Giá trị không phải là ngày tháng hợp lệ.',
    'This value is not a valid email address.' => 'Giá trị này không phải là email hợp lệ.',
    'The file could not be found.' => 'Tập tin không tìm thấy.',
    'The file is not readable.' => 'Tập tin không thể đọc được.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn ({{ size }} {{ suffix }}). Kích thước tối đa cho phép {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Kiểu mime của tập tin không hợp lệ ({{ type }}). Kiểu hợp lệ là {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Giá trị phải bằng hoặc nhỏ hơn {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.|Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.',
    'This value should be {{ limit }} or more.' => 'Giá trị phải lớn hơn hoặc bằng {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.|Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.',
    'This value should not be blank.' => 'Giá trị không được phép để trống.',
    'This value should not be null.' => 'Giá trị không được phép rỗng.',
    'This value should be null.' => 'Giá trị phải rỗng.',
    'This value is not valid.' => 'Giá trị không hợp lệ.',
    'This value is not a valid time.' => 'Giá trị không phải là thời gian hợp lệ.',
    'This value is not a valid URL.' => 'Giá trị không phải là địa chỉ URL hợp lệ.',
    'The two values should be equal.' => 'Hai giá trị phải bằng nhau.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn. Kích thước tối đa cho phép là {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Tập tin quá lớn.',
    'The file could not be uploaded.' => 'Tập tin không thể tải lên.',
    'This value should be a valid number.' => 'Giá trị phải là con số.',
    'This file is not a valid image.' => 'Tập tin không phải là hình ảnh.',
    'This is not a valid IP address.' => 'Địa chỉ IP không hợp lệ.',
    'This value is not a valid language.' => 'Giá trị không phải là ngôn ngữ hợp lệ.',
    'This value is not a valid locale.' => 'Giá trị không phải là một bản địa địa phương hợp lệ.',
    'This value is not a valid country.' => 'Giá trị không phải là nước hợp lệ.',
    'This value is already used.' => 'Giá trị đã được sử dụng.',
    'The size of the image could not be detected.' => 'Kích thước của hình ảnh không thể xác định.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Chiều rộng của hình quá lớn ({{ width }}px). Chiều rộng tối đa phải là {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Chiều rộng của hình quá thấp ({{ width }}px). Chiều rộng tối thiểu phải là {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Chiều cao của hình quá cao ({{ height }}px). Chiều cao tối đa phải là {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Chiều cao của hình quá thấp ({{ height }}px). Chiều cao tối thiểu phải là {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Giá trị này phải là mật khẩu hiện tại của người dùng.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Giá trị phải có chính xác {{ limit }} kí tự.|Giá trị phải có chính xác {{ limit }} kí tự.',
    'The file was only partially uploaded.' => 'Tập tin chỉ được tải lên một phần.',
    'No file was uploaded.' => 'Tập tin không được tải lên.',
    'No temporary folder was configured in php.ini.' => 'Thư mục tạm không được định nghĩa trong php.ini.',
    'Cannot write temporary file to disk.' => 'Không thể ghi tập tin tạm ra đĩa.',
    'A PHP extension caused the upload to fail.' => 'Một PHP extension đã phá hỏng quá trình tải lên của tập tin.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Danh sách phải chứa {{ limit }} hoặc nhiều hơn thành phần.|Danh sách phải chứa {{ limit }} hoặc nhiều hơn thành phần.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Danh sách phải chứa {{ limit }} hoặc ít hơn thành phần.|Danh sách phải chứa {{ limit }} hoặc ít hơn thành phần.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Danh sách phải chứa chính xác {{ limit }} thành phần.|Danh sách phải chứa chính xác {{ limit }} thành phần.',
    'Invalid card number.' => 'Số thẻ không hợp lệ.',
    'Unsupported card type or invalid card number.' => 'Thẻ không được hỗ trợ hoặc số thẻ không hợp lệ.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Giá trị không phải là International Bank Account Number (IBAN) hợp lệ.',
    'This value is not a valid ISBN-10.' => 'Giá trị không phải là ISBN-10 hợp lệ.',
    'This value is not a valid ISBN-13.' => 'Giá trị không phải là ISBN-13 hợp lệ.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Giá trị không phải là ISBN-10 hoặc ISBN-13 hợp lệ.',
    'This value is not a valid ISSN.' => 'Giá trị không là ISSN hợp lệ.',
    'This value is not a valid currency.' => 'Giá trị không phải là đơn vi tiền tệ hợp lệ.',
    'This value should be equal to {{ compared_value }}.' => 'Giá trị phải bằng {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Giá trị phải lớn hơn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Giá trị phải lớn hơn hoặc bằng {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị phải giống  {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Giá trị phải bé hơn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Giá trị không được phép nhỏ hơn hoặc bằng {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Giá trị không được phép bằng {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị không được phép giống như {{ compared_value_type }} {{ compared_value }}.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Có lỗi trong quá trình xác thực.',
    'Authentication credentials could not be found.' => 'Thông tin dùng để xác thực không tìm thấy.',
    'Authentication request could not be processed due to a system problem.' => 'Yêu cầu xác thực không thể thực hiện do lỗi của hệ thống.',
    'Invalid credentials.' => 'Thông tin dùng để xác thực không hợp lệ.',
    'Cookie has already been used by someone else.' => 'Cookie đã được dùng bởi người dùng khác.',
    'Not privileged to request the resource.' => 'Không được phép yêu cầu tài nguyên.',
    'Invalid CSRF token.' => 'Mã CSRF không hợp lệ.',
    'Digest nonce has expired.' => 'Mã dùng một lần đã hết hạn.',
    'No authentication provider found to support the authentication token.' => 'Không tìm thấy nhà cung cấp dịch vụ xác thực nào cho mã xác thực mà bạn sử dụng.',
    'No session available, it either timed out or cookies are not enabled.' => 'Không tìm thấy phiên làm việc. Phiên làm việc hoặc cookie có thể bị tắt.',
    'No token could be found.' => 'Không tìm thấy mã token.',
    'Username could not be found.' => 'Không tìm thấy tên người dùng username.',
    'Account has expired.' => 'Tài khoản đã hết hạn.',
    'Credentials have expired.' => 'Thông tin xác thực đã hết hạn.',
    'Account is disabled.' => 'Tài khoản bị tạm ngừng.',
    'Account is locked.' => 'Tài khoản bị khóa.',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor deveria ser falso.',
    'This value should be true.' => 'Este valor deveria ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor deveria ser do tipo {{ type }}.',
    'This value should be blank.' => 'Este valor deveria ser vazio.',
    'The value you selected is not a valid choice.' => 'O valor selecionado não é uma opção válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Você deveria selecionar {{ limit }} opção no mínimo.|Você deveria selecionar {{ limit }} opções no mínimo.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Você deve selecionar, no máximo {{ limit }} opção.|Você deve selecionar, no máximo {{ limit }} opções.',
    'One or more of the given values is invalid.' => 'Um ou mais dos valores introduzidos não são válidos.',
    'This field was not expected.' => 'Este campo não era esperado.',
    'This field is missing.' => 'Este campo está faltando.',
    'This value is not a valid date.' => 'Este valor não é uma data válida.',
    'This value is not a valid datetime.' => 'Este valor não é uma data-hora válida.',
    'This value is not a valid email address.' => 'Este valor não é um endereço de e-mail válido.',
    'The file could not be found.' => 'O arquivo não pôde ser encontrado.',
    'The file is not readable.' => 'O arquivo não pôde ser lido.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande ({{ size }} {{ suffix }}). O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo é inválido ({{ type }}). Os tipos mime permitidos são {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor deveria ser {{ limit }} ou menor.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'O valor é muito longo. Deveria ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor deveria ser {{ limit }} ou mais.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'O valor é muito curto. Deveria de ter {{ limit }} caractere ou mais.|O valor é muito curto. Deveria de ter {{ limit }} caracteres ou mais.',
    'This value should not be blank.' => 'Este valor não deveria ser branco/vazio.',
    'This value should not be null.' => 'Este valor não deveria ser nulo.',
    'This value should be null.' => 'Este valor deveria ser nulo.',
    'This value is not valid.' => 'Este valor não é válido.',
    'This value is not a valid time.' => 'Este valor não é uma hora válida.',
    'This value is not a valid URL.' => 'Este valor não é um URL válido.',
    'The two values should be equal.' => 'Os dois valores deveriam ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande. O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O ficheiro é muito grande.',
    'The file could not be uploaded.' => 'Não foi possível carregar o ficheiro.',
    'This value should be a valid number.' => 'Este valor deveria de ser um número válido.',
    'This file is not a valid image.' => 'Este ficheiro não é uma imagem.',
    'This is not a valid IP address.' => 'Este endereço de IP não é válido.',
    'This value is not a valid language.' => 'Este valor não é uma linguagem válida.',
    'This value is not a valid locale.' => 'Este valor não é um \'locale\' válido.',
    'This value is not a valid country.' => 'Este valor não é um País válido.',
    'This value is already used.' => 'Este valor já está a ser usado.',
    'The size of the image could not be detected.' => 'O tamanho da imagem não foi detetado.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imagem ({{ width }}px) é muito grande. A largura máxima da imagem é: {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imagem ({{ width }}px) é muito pequena. A largura miníma da imagem é de: {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imagem ({{ height }}px) é muito grande. A altura máxima da imagem é de: {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imagem ({{ height }}px) é muito pequena. A altura miníma da imagem é de: {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor deveria de ser a password atual do utilizador.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor tem de ter exatamente {{ limit }} carateres.',
    'The file was only partially uploaded.' => 'Só foi enviado parte do ficheiro.',
    'No file was uploaded.' => 'Nenhum ficheiro foi enviado.',
    'No temporary folder was configured in php.ini.' => 'Não existe nenhum directório temporária configurado no ficheiro php.ini.',
    'Cannot write temporary file to disk.' => 'Não foi possível escrever ficheiros temporários no disco.',
    'A PHP extension caused the upload to fail.' => 'Uma extensão PHP causou a falha no envio.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta coleção deve conter {{ limit }} elemento ou mais.|Esta coleção deve conter {{ limit }} elementos ou mais.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta coleção deve conter {{ limit }} elemento ou menos.|Esta coleção deve conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta coleção deve conter exatamente {{ limit }} elemento.|Esta coleção deve conter exatamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de cartão inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de cartão não suportado ou número de cartão inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este não é um Número Internacional de Conta Bancária (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor não é um ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor não é um ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor não é um ISBN-10 ou ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor não é um ISSN válido.',
    'This value is not a valid currency.' => 'Este não é um valor monetário válido.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor deve ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor deve ser superior a {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor deve ser igual ou superior a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor deve ser inferior a {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor deve ser igual ou inferior a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor não deve ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor não deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'O formato da imagem é muito grande ({{ ratio }}). O formato máximo é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'O formato da imagem é muito pequeno ({{ ratio }}). O formato mínimo esperado é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imagem é um quadrado ({{ width }}x{{ height }}px). Imagens quadradas não são permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imagem está orientada à paisagem ({{ width }}x{{ height }}px). Imagens orientadas à paisagem não são permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imagem está orientada ao retrato ({{ width }}x{{ height }}px). Imagens orientadas ao retrato não são permitidas.',
    'An empty file is not allowed.' => 'Ficheiro vazio não é permitido.',
    'This form should not contain extra fields.' => 'Este formulário não deveria conter campos extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um ficheiro mais pequeno.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor submeta o formulário novamente.',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePt);

return $catalogue;