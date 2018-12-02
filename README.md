# ss-upgrader

This command line tool is designed to help with the SilverStripe ugrade from classes that didn't use namespace to the latest namespaced classes (i.e. to version 4.x). This could also work for earlier version 2.* but that depends on how you architectured your application

## Installation
At the command line enter:  
`composer global require hilmak01/ss-upgrader`

## Usage:  
 `command [options] [arguments]`  
  
## Options:  
  **-h, --help**        		Display this help message  
  **-q, --quiet**           Do not output any message  
  **-V, --version**         Display this application version  
  **--ansi**           	  	Force ANSI output  
  **--no-ansi**             Disable ANSI output  
  **-n, --no-interaction**  Do not ask any interactive question  
  **-v|vv|vvv, --verbose**  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug  
  
## Available commands:  
  **all-at-once**    Aggregate all the commands required to upgrade one project.  
  **clean-files**    Clean all original and temporary files  
  **help**           Displays help for a command  
  **list**           Lists commands  
  **modify-code**    Modifies current code to be compatible with latest framework  
  **split-classes**  Split multi-classes files into their own class files  
  **upgrade**        Upgrade silverstripe code using silverstripe upgrader
