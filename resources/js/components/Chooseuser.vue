<template>
        <div class="choose">
            <div class="example">
                <div class="clip">
                    <div class="film">
                        <img class="user-img" src="../../../resources/images/user.png">
                    </div>
                </div>

                <div class="clip">
                    <div class="film">
                        <img class="user-img" src="../../../resources/images/user.png">
                    </div>
                </div>

                <div class="clip">
                    <div class="film">
                        <img class="user-img" src="../../../resources/images/user.png">
                    </div>
                </div>
            </div>
            <div class="namebar">
                <div>
                    <p class="user-name">Utilisateur 1</p>
                </div>
                <div>
                    <p class="user-name">Utilisateur 2</p>
                </div>
                <div>
                    <p class="user-name">Utilisateur 3</p>
                </div>
            </div>
        </div>
</template>

<script>
export default{
    data(){
        return{

        }
    }
}
</script>

<style scoped>
.userimg{
    width: 200px;
}
.choose{
    width:100vw;
    height: 100vh;
    background-image: url("../../../resources/images/nutflux_fond.png");
    background-size:cover;
    background-position: center;
    padding-top: 8%;
}

.example{
    padding-left: 100px;
    padding-right: 100px;
}

.clip {
    float: left;
    width: 31%;
    margin: 0 1%;
    padding-top: 25%;
    position: relative;
    background-color: rgba(0,0,0,0.8);
    background-image:
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),

        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05),
        linear-gradient(to right, #b02e05, #b02e05);

    background-repeat:no-repeat;
    background-position:
        5% 5%,
        15% 5%,
        25% 5%,
        35% 5%,
        45% 5%,
        55% 5%,
        65% 5%,
        75% 5%,
        85% 5%,
        95% 5%,

        5% 95%,
        15% 95%,
        25% 95%,
        35% 95%,
        45% 95%,
        55% 95%,
        65% 95%,
        75% 95%,
        85% 95%,
        95% 95%;

    background-size:
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,

        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%,
        5% 8%;
}
.clip .film {
  margin: 12% 5%;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  overflow: hidden;
  display: -webkit-grid;
  display: -ms-grid;
  -webkit-grid-columns: 1fr;
  -webkit-grid-rows: 1fr;
  -ms-grid-columns: 1fr;
  -ms-grid-rows: 1fr;
}
.clip img {
  max-width: 100%;
  -webkit-grid-row-align: center;
  -ms-grid-row-align: center;
}

.film{
    padding-left: 20%;
    padding-right: 20%;
    padding-top:20px;
}

.namebar{
    width:100vw;
    height: 50px;
    padding-right: 15%;
    padding-left: 15%;
    display:flex;
    flex-direction: row;
    justify-content: space-between;

}
.user-name{
    color:white;
    font-size: 35px;
    font-family: 'Allerta Stencil', sans-serif;
}
</style>
