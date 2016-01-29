# PCI Self-Assessment Questionnaire
If you happen to be a HackerGuardian customer for PCI scans, you'll find that you have access to the PCI SAQ (Self-Assessment Questionaire). It's a handy thing to be able to click through but if you need to ask others for help - its extremely annoying to only be able to view one question at a time. Fortunately Comodo puts all the questions in the HTML, it's just a matter of finding them and extract them. This script might help you.

## How to use
* Log in to [HackerGuardian](https://www.hackerguardian.com/)
* Access your [SAQ](https://saq.hackerguardian.com/saq/answer/saq?_type=DSP) of choice
* Grab the HTML source (you might trim off the header & footer stuff that isn't important). Save it at saq.html
* Execute: php saq.php
* Load saq.csv into Excel/Google Docs.
* Enjoy

## Comments
* You can also just google up the public copies, ex [PCI SAQ DSP 3.1](https://www.pcisecuritystandards.org/documents/SAQ_D_v3-1_ServiceProvider.pdf)
* https://regex101.com/ is a very handy site
* Why PHP? Because it has a lot easier RegEx functionality than NodeJS

## License
This script is licensed under [CC0 1.0 Universal](https://creativecommons.org/publicdomain/zero/1.0/). You are responsible for verifying your compliance with the HackerGuardian Terms Of Service.
