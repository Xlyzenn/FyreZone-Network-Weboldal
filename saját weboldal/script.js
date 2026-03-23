// Példa: join gomb kattintás
document.querySelector('.join-btn').addEventListener('click', () => {
  alert("Másold az IP-t a Minecraftba: play.FyreZone.hu");
});
let owner = "XLyzenn";
<script>

let player = prompt("Add meg a Minecraft neved:");

let owner = "XLyzenn";

if(player === owner){

document.getElementById("rang").innerHTML = "<span style='color:red'>Tulajdonos</span>";

}else{

document.getElementById("rang").innerHTML = "Játékos";

}

</script>