<img src="fundo.png" alt="" class="bg-image">
    <div class="lll">
        <div class="position-fixed bg-dark rounded sumario">
            <a onclick="goToMercury()" class="orange-button">Mercúrio</a>
            <a onclick="goToVenus()" class="orange-button">Venus</a>
            <a onclick="goToEarth()" class="orange-button">Terra</a>
            <a onclick="goToMars()" class="orange-button">Marte</a>
            <a onclick="goToJupiter()" class="orange-button">Jupiter</a>
            <a onclick="goToSaturn()" class="orange-button">Saturno</a>
            <a onclick="goToUranus()" class="orange-button">Urano</a>
            <a onclick="goToNeptune()" class="orange-button">Netuno</a>
            <a onclick="goToPluto()" class="orange-button">Plutão</a>
        </div>
        <div class="position-absolute top-50 translate-middle-y sun">
            <img src="sol.svg" alt="" class="rounded-circle" onclick="showInfoSol()">
        </div>
        <div class="planets">
            <div class="mercury">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="mercury">
                <div class="position-absolute top-50 translate-middle-y">
                    <div class="position-absolute top-50">
                        <span class="d-flex justify-content-center">
                            <img src="mercury.png" alt="" id="mercury" class="translate-middle rounded-circle" onclick="showInfoMercurio()">
                        </span>
                    </div>
                </div>
            </div>
            <div class="venus">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="venus">
                <div class="position-absolute top-50 translate-middle-y">
                    <div class="position-absolute top-50">
                        <span class="d-flex justify-content-center">
                            <img src="venus.png" alt="" id="venus" class="translate-middle rounded-circle" onclick="showInfoVenus()">
                        </span>
                    </div>
                </div>
            </div>
            <div class="earth">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="earth">
                <div class="position-absolute top-50 translate-middle-y">
                    <div class="position-absolute top-50">
                        <span class="d-flex justify-content-center">
                            <img src="earth.svg" alt="" id="earth" class="translate-middle rounded-circle" onclick="showInfoTerra()">
                        </span>
                    </div>
                </div>
            </div>
            <div class="mars">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="mars">
                <div class="position-absolute top-50 translate-middle-y">
                    <div class="position-absolute top-50">
                        <span class="d-flex justify-content-center">
                            <img src="mars.png" alt="" id="mars" class="translate-middle rounded-circle" onclick="showInfoMarte()">
                        </span>
                    </div>
                </div>
            </div>
            <div class="jupiter">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="jupiter">
                <div class="position-absolute top-50">
                    <span class="d-flex justify-content-center">
                        <img src="jupiter.png" alt="" id="jupiter" class="translate-middle rounded-circle" onclick="showInfoJupiter()"> 
                    </span>
                </div>
            </div>
            <div class="saturn">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="saturn">
                <div class="position-absolute top-50">
                    <span class="d-flex justify-content-center">
                        <img src="saturn.png" alt="" id="saturn" class="translate-middle rounded-circle" onclick="showInfoSaturno()">
                    </span>
                </div>
            </div>
            <div class="uranus">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="uranus">
                <div class="position-absolute top-50">
                    <span class="d-flex justify-content-center">
                        <img src="uranus.png" alt="" id="uranus" class="translate-middle rounded-circle" onclick="showInfoUrano()">
                    </span>
                </div>
            </div>
            <div class="neptune">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded-circle">
                    </span>
                </div>
            </div>
            <div class="neptune">
                <div class="position-absolute top-50">
                    <span class="d-flex justify-content-center">
                        <img src="neptune.png" alt="" id="neptune" class="translate-middle rounded-circle" onclick="showInfoNetuno()">
                    </span>
                </div>
            </div>
            <div class="pluto">
                <div class="position-absolute top-50">
                    <span class="d-block translate-middle but rounded">
                    </span>
                </div>
            </div>
            <div class="pluto">
                <div class="position-absolute top-50">
                    <span class="d-flex justify-content-center">
                        <img src="pluto.png" alt="" id="pluto" class="translate-middle" onclick="showInfoPlutao()">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="infos">
        <div class="position-fixed info start-50 translate-middle-x hide" id="infosol">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">O Sol:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoSol()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">O sol é uma estrela anã amarela que habita o centro do nosso sistema solar e é orbitada por todos os outros corpos do sistema solar. Ele funde hidrogênio em hélio em um processo tão poderoso que libera toda a luz e calor que sentimos todos os dias.</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infomercurio">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Mercúrio:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoMercurio()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">Mercúrio é o planeta mais próximo do sol no sistema solar e por isso possui uma temperatura média na superfície de 166°C. Mercúrio não possui atmosfera e é o menor planeta do nosso sistema.</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infovenus">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Venus:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoVenus()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">Venus, o segundo planeta do sistema solar é, também, o mais quente entre eles devido ao efeito estufa causado por sua atmosfera. É muito parecido com a Terra e cientistas dizem que, caso o efeito estufa na terra não seja parado, nosso planeta se tornará muito parecido com Venus</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infoterra">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Terra:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoTerra()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">Terra, nossa casa, o único planeta conhecido com vida. É aqui onde ocerrem nossas histórias e é daqui que partimos em direção ao cosmos infinito.</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infomarte">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Marte:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoMarte()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">O planeta que o objetivo da nova corrida espacial, muitos cientistas dizem que Marte é o planeta mais propenso a receber a vida humana em futuras viagens de colonização.</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infojupiter">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Jupiter:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoJupiter()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">O maior planeta de nosso sistema, é famoso por uma tempestade visível por telescópios, que é tão grande que caberiam mais de um planeta Terra dentro dela. É formado por gases chamado de escudo da Terra pois sua imensa gravidade impede que muitos asteróides atinjam nosso planeta</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infosaturno">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Saturno:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoSaturno()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">Famoso por seus anéis(não representados aqui), esse gigante gasoso é provavelmente uma obra de arte a ser apreciada. Recentemente descobriu-se que ocorrem tempestades hexagonais nos polos do planeta.</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infourano">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Urano:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoUrano()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">Urano, o penúltimo planeta é famoso por sua inclinção elevada, que faz seus polos ficarem aonde seria o equador de outros planetas. Urano e Netuno ficaram conhecidos recentemente graças a descoberta de que nesses planetas há chuvas de diamante.</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infonetuno">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Netuno:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoNetuno()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">Netuno, o último planeta planeta do sistema solar. Além de chuvas de diamante, nesse planeta ocorrem os ventos mais rápidos do sistema solar, chegando a incríveis 2000Km/h.</p>
                </div>
            </div>
        </div>
        <div class="position-fixed info start-50 translate-middle-x hide" id="infoplutao">
            <div class="bg-dark rounded">
                <div class="d-flex justify-content-between">
                    <h3 class="m-2 text-white">Plutão:</h3>
                    <button class="btn btn-danger p-1 m-2" onclick="hideInfoPlutao()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </div>
                <div class="pb-1 px-3">
                    <p class="text-white">Deixou de ser planeta em 2006, sendo rebaixado a planeta anão. Ficou famoso pois possui em sua superfície um grande desenho que lembra um coração.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/map.js">
    </script>