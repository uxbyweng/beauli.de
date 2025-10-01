<script src="/js/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise(
    {
        "palette": {
            "popup": {
            "background": "#5f6e7e"
        },
        "button": {
            "background": "#d42d91"
        }
    },
    "showLink": false,
    "theme": "classic",
    "position": "bottom-right",
    "type": "opt-in",
    <?php if ($sprache == 'de') { ?>
        "content": {
            "message": "Wir benötigen Ihre Zustimmung, um auf dieser Webseite Cookies zu verwenden. Mit Hilfe von Cookies können wir Ihnen auf dieser Webseite Info-Videos zur Verfügung stellen. Mit Klick auf 'Zustimmen' akzeptieren Sie die Verwendung von Cookies. Weitere Informationen finden Sie in unserer Datenschutzerklärung.",
            "deny": "Ablehnen",
            "allow": "Zustimmen"
        }
    <?php } if ($sprache == 'en') { ?>
        "content": {
            "message": "We need your consent to use cookies on this website. With the help of cookies, we can provide you with info videos on this website. By clicking on 'Allow Cookies' you accept the use of cookies. Further information can be found in our data protection declaration.",
            "deny": "Decline",
            "allow": "Allow Cookies"
        }
    <?php } ?>
    }
);
</script>