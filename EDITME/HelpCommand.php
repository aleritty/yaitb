<?php
namespace Commands;
use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class HelpCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "help"; //this is the string the user write

    /**
     * @var string Command Description
     */
    protected $description = "Guida alle funzioni di questo Bot";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage('Ecco come posso esserti utile:');
        $this->replyWithChatAction(Actions::TYPING);
        $commands = $this->getTelegram()->getCommands();
        $response = '';
        foreach ($commands as $name => $command) {
            $response .= sprintf('/%s - %s' . PHP_EOL, $name, $command->getDescription());
        }
        $this->replyWithMessage($response);
        $this->replyWithMessage('Puoi anche inserirmi in un gruppo, non leggerò i vostri messaggi, ma se mi chiamate con @NutrifadBot /comando sarò pronto a rispondere');
    }
}


?>
