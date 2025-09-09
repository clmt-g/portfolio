<template>
    <section>
        <div class="container">
            <h1>Portfolio</h1>
            <p>Clément Guerault, élève en BTS SIO</p>
        </div>
    </section>
</template>

<style scoped>
.container {
    width: 100%;
    height: 650px;
    text-align: left;
    padding-left: 5%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Titre principal */
h1 {
    font-size: 8rem;
    margin-bottom: -35px;
    margin-top: 5%;
    line-height: 1.1;
}

/* Texte secondaire */
p {
    font-size: 1.4em;
}

/* ===== Responsive ===== */
@media (max-width: 1200px) {
    h1 {
        font-size: 6rem;
    }
    p {
        font-size: 1.2em;
    }
}

@media (max-width: 768px) {
    .container {
        padding-left: 3%;
    }
    h1 {
        font-size: 4rem;
        margin-bottom: -20px;
        margin-top: 10%;
    }
    p {
        font-size: 1.1em;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 2.8rem;
        margin-bottom: -10px;
        margin-top: 15%;
    }
    p {
        font-size: 1em;
    }
}
</style>
