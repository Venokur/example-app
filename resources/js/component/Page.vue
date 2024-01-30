<template>
    <div style="margin: auto;width: 500px;">
        <div style="margin: 10px;">
            Страница 2
        </div>
        <div style="margin: 10px;">
            <div>{{ `${this.$store.state.name ? 'Данные с формы:': 'Пусто'}` }}</div>
            <small v-show="this.$store.state.name">Имя: {{ this.$store.state.name }}</small>
            <br>
            <small v-show="this.$store.state.comment">Обращение: {{ this.$store.state.comment }}</small>
        </div>
        <button 
        @click="this.$router.push('/')" 
            type="button" 
            class="btn btn-primary btn-sm" 
            style="margin: 10px;
        ">
            Страница 1
        </button>
    </div>
</template>