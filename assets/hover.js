// JavaScript Document

<script type="text/javascript">

window.onload = function() { 
  const vids = document.getElementsByTagName(`video`)

  for (let i = 0; i < vids.length; i++) {
    vids[i].addEventListener( `mouseover`, function(e) { 
      vids[i].play()
    })
    vids[i].addEventListener( `mouseout`, function(e) {
      vids[i].pause()
    })
  }
}

</script>
