<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('et', array (
  'validators' => 
  array (
    'This value should be false.' => 'Väärtus peaks olema väär.',
    'This value should be true.' => 'Väärtus peaks oleme tõene.',
    'This value should be of type {{ type }}.' => 'Väärtus peaks olema {{ type }}-tüüpi.',
    'This value should be blank.' => 'Väärtus peaks olema tühi.',
    'The value you selected is not a valid choice.' => 'Väärtus peaks olema üks etteantud valikutest.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Valima peaks vähemalt {{ limit }} valikut.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Valima peaks mitte rohkem kui  {{ limit }} valikut.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'See väli ei oodatud.',
    'This field is missing.' => 'See väli on puudu.',
    'This value is not a valid date.' => 'Väärtus pole korrektne kuupäev.',
    'This value is not a valid datetime.' => 'Väärtus pole korrektne kuupäev ja kellaeg.',
    'This value is not a valid email address.' => 'Väärtus pole korrektne e-maili aadress.',
    'The file could not be found.' => 'Faili ei leita.',
    'The file is not readable.' => 'Fail ei ole loetav.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur ({{ size }} {{ suffix }}). Suurim lubatud suurus on {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faili sisutüüp on vigane ({{ type }}). Lubatud sisutüübid on {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Väärtus peaks olema {{ limit }} või vähem.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Väärtus on liiga pikk. Pikkus peaks olema {{ limit }} tähemärki või vähem.',
    'This value should be {{ limit }} or more.' => 'Väärtus peaks olema {{ limit }} või rohkem.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Väärtus on liiga lühike. Pikkus peaks  olema {{ limit }} tähemärki või rohkem.',
    'This value should not be blank.' => 'Väärtus ei tohiks olla tühi.',
    'This value should not be null.' => 'Väärtus ei tohiks olla \'null\'.',
    'This value should be null.' => 'Väärtus peaks olema \'null\'.',
    'This value is not valid.' => 'Väärtus on vigane.',
    'This value is not a valid time.' => 'Väärtus pole korrektne aeg.',
    'This value is not a valid URL.' => 'Väärtus pole korrektne URL.',
    'The two values should be equal.' => 'Väärtused peaksid olema võrdsed.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur. Maksimaalne lubatud suurus on {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fail on liiga suur.',
    'The file could not be uploaded.' => 'Faili ei saa üles laadida.',
    'This value should be a valid number.' => 'Väärtus peaks olema korrektne number.',
    'This file is not a valid image.' => 'Fail ei ole korrektne pilt.',
    'This is not a valid IP address.' => 'IP aadress pole korrektne.',
    'This value is not a valid language.' => 'Väärtus pole korrektne keel.',
    'This value is not a valid locale.' => 'Väärtus pole korrektne asukohakeel.',
    'This value is not a valid country.' => 'Väärtus pole olemasolev riik.',
    'This value is already used.' => 'Väärtust on juba kasutatud.',
    'The size of the image could not be detected.' => 'Pildi suurust polnud võimalik tuvastada.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Pilt on liiga lai ({{ width }}px). Suurim lubatud laius on {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Pilt on liiga kitsas ({{ width }}px). Vähim lubatud laius on {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Pilt on liiga pikk ({{ height }}px). Lubatud suurim pikkus on {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Pilt pole piisavalt pikk ({{ height }}px). Lubatud vähim pikkus on {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Väärtus peaks olema kasutaja kehtiv salasõna.',
    'This value should have exactly {{ limit }} characters.' => 'Väärtus peaks olema täpselt {{ limit }} tähemärk pikk.|Väärtus peaks olema täpselt {{ limit }} tähemärki pikk.',
    'The file was only partially uploaded.' => 'Fail ei laetud täielikult üles.',
    'No file was uploaded.' => 'Ühtegi faili ei laetud üles.',
    'No temporary folder was configured in php.ini.' => 'Ühtegi ajutist kausta polnud php.ini-s seadistatud.',
    'Cannot write temporary file to disk.' => 'Ajutist faili ei saa kettale kirjutada.',
    'A PHP extension caused the upload to fail.' => 'PHP laiendi tõttu ebaõnnestus faili üleslaadimine.',
    'This collection should contain {{ limit }} elements or more.' => 'Kogumikus peaks olema vähemalt {{ limit }} element.|Kogumikus peaks olema vähemalt {{ limit }} elementi.',
    'This collection should contain {{ limit }} elements or less.' => 'Kogumikus peaks olema ülimalt {{ limit }} element.|Kogumikus peaks olema ülimalt {{ limit }} elementi.',
    'This collection should contain exactly {{ limit }} elements.' => 'Kogumikus peaks olema täpselt {{ limit }} element.|Kogumikus peaks olema täpselt {{ limit }}|elementi.',
    'Invalid card number.' => 'Vigane kaardi number.',
    'Unsupported card type or invalid card number.' => 'Kaardi tüüpi ei toetata või kaardi number on vigane.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Väärtus pole korrektne IBAN-number.',
    'This value is not a valid ISBN-10.' => 'Väärtus pole korrektne ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-10 ega ISBN-13.',
    'This value is not a valid ISSN.' => 'Väärtus pole korrektne ISSN.',
    'This value is not a valid currency.' => 'Väärtus pole korrektne valuuta.',
    'This value should be equal to {{ compared_value }}.' => 'Väärtus peaks olema võrdne {{ compared_value }}-ga.',
    'This value should be greater than {{ compared_value }}.' => 'Väärtus peaks olema suurem kui {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Väärtus peaks olema suurem kui või võrduma {{ compared_value }}-ga.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus peaks olema identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui või võrduma {{ compared_value }}-ga.',
    'This value should not be equal to {{ compared_value }}.' => 'Väärtus ei tohiks võrduda {{ compared_value }}-ga.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus ei tohiks olla identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Kuvasuhe on liiga suur ({{ ratio }}). Lubatud maksimaalne suhe on {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Kuvasuhe on liiga väike ({{ ratio }}). Oodatav minimaalne suhe on {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Pilt on ruudukujuline ({{ width }}x{{ height }}px). Ruudukujulised pildid pole lubatud.',
    'This form should not contain extra fields.' => 'Väljade grupp ei tohiks sisalda lisaväljasid.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Üleslaaditud fail oli liiga suur. Palun proovi uuesti väiksema failiga.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-märgis on vigane. Palun proovi vormi uuesti esitada.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Create %entity_label%',
    'show.page_title' => '%entity_label% (#%entity_id%)',
    'edit.page_title' => 'Edit %entity_label% (#%entity_id%)',
    'list.page_title' => '%entity_label%',
    'search.page_title' => '{0} No results found|{1} <strong>1</strong> result found|]1,Inf] <strong>%count%</strong> results found',
    'search.no_results' => 'No results found.',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the property is not public',
    'label.form.empty_value' => 'None',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.signout' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'delete_modal.action' => 'Delete',
    'batch_action_modal.title' => 'You are going to apply the "%action_name%" action to %num_items% item(s).',
    'batch_action_modal.content' => 'You can\'t undo this action.',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'errors' => 'Error|Errors',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'show.remaining_items' => '{1} there is another item not displayed in this listing|]1,Inf] %count% other items are not displayed in this listing',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.no_entities_configured' => 'The application is not properly configured.',
    'exception.undefined_entity' => 'The application is not properly configured for this kind of items.',
    'exception.no_permission' => 'You don\'t have enough permissions to do this.',
    'login.username' => 'Username',
    'login.password' => 'Password',
    'login.sign_in' => 'Sign in',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'security.list.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
  ),
  'messages' => 
  array (
    'action.new' => 'Add %entity_label%',
    'action.show' => 'Show',
    'action.edit' => 'Edit',
    'action.search' => 'Search',
    'action.delete' => 'Delete',
    'action.save' => 'Save changes',
    'action.continue' => 'Continue',
    'action.cancel' => 'Cancel',
    'action.list' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'label.form.empty_value' => 'None',
    '__name__label__' => '__name__label__',
  ),
  'CHCookieConsentBundle' => 
  array (
    'ch_cookie_consent.title' => 'Cookies sur notre site.',
    'ch_cookie_consent.intro' => '',
    'ch_cookie_consent.read_more' => 'Mentions légales',
    'ch_cookie_consent.analytics.title' => 'Voulez vous des cookies analytiques ?',
    'ch_cookie_consent.analytics.description' => '',
    'ch_cookie_consent.tracking.title' => 'Do you want tracking cookies?',
    'ch_cookie_consent.tracking.description' => '',
    'ch_cookie_consent.marketing.title' => 'Do you want personalised ads?',
    'ch_cookie_consent.marketing.description' => '',
    'ch_cookie_consent.social_media.title' => 'Do you want social media cookies?',
    'ch_cookie_consent.social_media.description' => '',
    'ch_cookie_consent.no' => 'No',
    'ch_cookie_consent.yes' => 'Yes',
    'ch_cookie_consent.save' => 'Save',
    'ch_cookie_consent.use_only_functional_cookies' => 'Only use functional cookies',
    'ch_cookie_consent.use_all_cookies' => 'Allow all cookies',
    'ch_cookie_consent.show_details' => 'Show details',
    'ch_cookie_consent.hide_details' => 'Hide details',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
