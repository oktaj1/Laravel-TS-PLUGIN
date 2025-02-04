<button id="runTsScript">Run TS Script</button>
<script src="{{ asset('vendor/tsplugin/script.js') }}"></script>
<script>
    document.getElementById("runTsScript").addEventListener("click", function () {
        executeScript();
    });

    function executeScript() {
        console.log("Executing TypeScript script...");
    }
</script>
