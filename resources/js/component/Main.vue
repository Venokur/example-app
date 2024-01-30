<template>
    <div style="margin: auto;width: 500px;">
        <div style="margin: 10px;">
            Страница 1
        </div>
        <form style="margin: 10px;">
            <div class="mb-3">
                <input v-model="name" type="text" class="form-control" name="name" placeholder="Имя">
            </div>
            <div class="mb-3">
                <textarea v-model="comment" class="form-control" name="textarea" rows="3" placeholder="Обращение"></textarea>
            </div>
            <button @click.prevent="submit" type="submit" class="btn btn-primary btn-sm">Отправить</button>
        </form>
        <button 
            @click="this.$router.push('/page')" 
            type="button" 
            class="btn btn-primary btn-sm" 
            style="margin: 10px;
        ">
            Страница 2
        </button>
    </div>
</template>

<script>
export default {
    name: 'Main',
    data() {
        return {
            name: '',
            comment: ''
        }
    },
    created() {},
    mounted() {},
    methods: {
        submit () {    
            if ( this.name && this.comment ) {
                this.$store.state.name = this.name
                this.$store.state.comment = this.comment

                axios.post('/send', {
                    name: this.name,
                    comment: this.comment
                })
                .then(response => { 
                    console.log(response)
                })
                .catch(error => {
                    console.log(error)
                })

                this.$router.push('/page')
            }                
        }
    }
}
</script>