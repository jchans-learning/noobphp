<script src="<?= WEB_ROOT ?>js/jquery-3.5.1.js"></script>
<script src="<?= WEB_ROOT ?>bootstrap-4.5.3-dist/js/bootstrap.bundle.js"></script>

<script>
        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max - 50) + 100);
        }

        function getRBGA() {
            return `linear-gradient(135deg, rgba(${getRandomInt(256)},${getRandomInt(256)},${getRandomInt(256)},.5), rgba(${getRandomInt(256)},${getRandomInt(256)},${getRandomInt(256)},.8)`
        }

        const elements = document.querySelectorAll('.autobg');

        Array.from(elements).forEach((element, index) => {
            element.style.backgroundImage = getRBGA();
        });

    // $('.autobg').each(function (index, currentElement) {
    //     currentElement.style.backgroundImage = getRBGA();
    // });
    </script>