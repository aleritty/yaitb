# yaitb
Yet Another Idiot Telegram Bot

This is another idiot telegram bot.

I choose to write the bot with an objective:
* free hosting with google app engine (unless you exceed 20req/min... then you have to pay).
* Absolutelly nothing to configure and easy start
* Keep the code simple stupid!!!

So you have all that you need inside the project, no strange requirements or virtual-env.

PREREQUISITES:
* Talk to Bothfather and get your token (details HERE)
* Have a google app engine account (details HERE)
* Download google cloud sdk (gcloud tool), install and add to your PATH
* Install composer (details HERE)

To start your own just:
* git clone this repo
* open a terminal inside the folder and:
  * composer
  * gcloud auth login (open in browser)
  * git config credential.helper gcloud.sh
  * git remote add google https://source.developers.google.com/p/<PROJECT-ID>/

* start you personalization: copy all the sample files inside EDITME and start creating your command.
  * Remove the -SAMPLE part of the filename
  * Your Bot need to have at least /start, /stop, /help commands
  * Many examples of what you can do is inside COMMANDS-EXAMPLES
  * git commit your work (git commit -a -m "MESSAGE" if you have no fantasy)
  * git push google master
  * gcloud preview app deploy -q app.yaml --set-default --version 1
    * You can automate saving the latest two lines inside an executable shell script inside .git/hooks/post-commit like This
```
#!/bin/sh
git push google master
gcloud preview app deploy -q app.yaml --set-default --version 1
```

  * IF you want to use advanced functions you will need to enable google appengine default bucket
    * [https://cloud.google.com/appengine/docs/php/googlestorage/setup]
    * This enables: sending files, news distribution, advanced administrator commands



To Update your bot:
* git pull origin master
* merge changes if needed

In a few seconds google will start serving your bot at:
https://PROJECTID.appspot.com

To Enable your BOT to receive webhooks you have to go to:
https://PROJECTID.appspot.com/setup_webhooks

Now just continue to personalize your bot, you are online!


CONTRIBUTIONS
=============

Please feel free to send your contributions.

TODO
====

* Class and functions for defaultactions.php
* admin functions
* More samples of commands...

THANKS TO
=========

* Irazasyed for the basic SDK
