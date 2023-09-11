<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="{{ $linkYT }}" id="youtube"></iframe>
</div>


<script>
    function linkEmbedYt(link) {
        let videoCode = "";
        if (link.includes("https://www.youtube.com/watch?v=")) {
            videoCode = link.split("v=");
        } else if (link.includes("https://youtu.be")) {
            videoCode = link.split("youtu.be/");
        }
        return `https://www.youtube.com/embed/${videoCode[1]}`;
    }
    let deskripsis = document.querySelectorAll(".contents p.deskripsi");
    let iframe = document.querySelector("iframe#youtube");
    console.log(linkEmbedYt(iframe.src));
    iframe.src = linkEmbedYt(iframe.src)
</script>
