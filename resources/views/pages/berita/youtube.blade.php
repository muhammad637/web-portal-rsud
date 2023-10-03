<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="{{ $linkYT }}" id="youtube"></iframe>
</div>


<script>
    // URL YouTube

    function linkEmbedYt(link) {
        let videoCode = "";
        // var link = document.querySelector("iframe#youtube");
        if (link.includes("https://www.youtube.com/watch?v=")) {
            videoCode = ['haha',new URLSearchParams(new URL(link).search).get('v')]
        } else if (link.includes("https://youtu.be")) {
            videoCode = link.split("youtu.be/");
        }
        return `https://www.youtube.com/embed/${videoCode[1]}`;
        return link
    }
    let deskripsis = document.querySelectorAll(".contents p.deskripsi");
    let iframe = document.querySelector("iframe#youtube");
    console.log(linkEmbedYt(iframe.src));
    iframe.src = linkEmbedYt(iframe.src)

 
    
</script>
