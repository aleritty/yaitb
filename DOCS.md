##################### INITIALIZE WEB HOOKS #####################################

require_once('EDITME/config.php');
use Telegram\Bot\Api;
$telegram = new Api($BOTTOKEN);
$updates = $telegram->getWebhookUpdates();
$arup=json_decode($updates,true);

######### now I have available this dataset ####################################

$arup['update_id']
$arup['message']['message_id']
$arup['message']['from']['id']
$arup['message']['from']['first_name']
$arup['message']['from']['last_name']
$arup['message']['chat']['id']
$arup['message']['chat']['first_name']
$arup['message']['chat']['last_name']
$arup['message']['date']

################## The "body" part must be like one this: ######################

################## Case: Text ##################################################
$arup['message']['text'] //Yes, just the raw text

################## Case: Photo #################################################
$arup['message']['photo']
$arup['message']['photo'][x] //x= int, represent some image sizes (x=0,1,2,3)
$arup['message']['photo']['file_id'] //use to download
$arup['message']['photo']['file_size']
$arup['message']['photo']['width']
$arup['message']['photo'][height]

################## Case: Voice #################################################
$arup['message']['voice']
$arup['message']['voice']['duration']
$arup['message']['voice']['mime_type']
$arup['message']['voice']['file_id']
$arup['message']['voice']['file_size']

################## Case: Audio #################################################
$arup['message']['audio']
$arup['message']['audio']['duration']
$arup['message']['audio']['mime_type']
$arup['message']['audio']['title']
$arup['message']['audio']['performer']
$arup['message']['audio']['file_id']
$arup['message']['audio']['file_size']


################## Case: Document ##############################################
$arup['message']['document']
$arup['message']['document']['file_name']
$arup['message']['document']['mime_type']
$arup['message']['document']['file_id']
$arup['message']['document']['file_size']

################## Case: Sticker ###############################################
$arup['message']['sticker']
$arup['message']['sticker']['width']
$arup['message']['sticker']['height']
$arup['message']['sticker']['file_id']
$arup['message']['sticker']['file_size']
$arup['message']['sticker']['thumb']
$arup['message']['sticker']['thumb']['width']
$arup['message']['sticker']['thumb']['height']
$arup['message']['sticker']['thumb']['file_id']
$arup['message']['sticker']['thumb']['file_size']

################## Case: Video #################################################
$arup['message']['video']
$arup['message']['video']['duration']
$arup['message']['video']['width']
$arup['message']['video']['height']
$arup['message']['video']['file_id']
$arup['message']['video']['file_size']
$arup['message']['video']['thumb']
$arup['message']['video']['thumb']['width']
$arup['message']['video']['thumb']['height']
$arup['message']['video']['thumb']['file_id']
$arup['message']['video']['thumb']['file_size']

################## Case: Location ##############################################
$arup['message']['location']
$arup['message']['location']['longitude']
$arup['message']['location']['latitude']



################### syslog informations ########################################
syslog(LOG_INFO, $updates);
