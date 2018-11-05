# Expondent

An emergency response coordination platform for first respondents

## Release

Developed by Phoebe Yao (phoebexy), Alistair Robinson (A-Robinson-8), Ben SP (toxicologyoverload) and Jess Shires (JSShi01) in 24 hours for Hack The Midlands 2018
Visit us at Expondent.uk

## Overview

### Nexmo API

 - Expondent uses the Nexmo telecommunications API to perform call and SMS functions
 - We were allowed to experiment and test the limits of Nexmo's latest Node-RED API which is currently in active development
 - The backend cannot be made public since the Node-RED API has not yet been released.

### Emergency Request Recording

 - During natural disasters, emergency call centers may be overwhelmed, disrupted or unavailable. However, basic telecoms infrastructure may still be working
 - Emergency requests made to the Expondent emergency phone number are recorded and stored on a remote server, far away from the disaster zone
 - From here, emergency response coordinators can track, organise and replay requests

### Respondence Coordination

 - Response coordinators can also send individual messages to phone numbers as well as make broadcast text messages to all listed respondents
 - This assists response coordination, getting help to the people that need it the most
 
## The Future of Expondent

The following features were part of our vision for Expondent but could not be implemented during our constrained timeframe. Should any of the authors choose to return to this project, these features would be the first to be written:

 - Geolocation support
 - Automatic mobile number referencing and storage
 - Authentication and encryption of stored recordings
 - Audio file archiving and deleting from within webapp
 - Speech to text integration via an API

## Acknowledgements

 - The organisers, volunteers and sponsors of Hack The Midlands 2018 for facilitating this project and feeding Jess
 - Nexmo, with specific thanks to Sam Machin, for allowing us to use their experimental API and assisting in areas where documentation was not available
 - The British Computer Society (BCS) for awarding us "Hack With the Most Good for Society" award
