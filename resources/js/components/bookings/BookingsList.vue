<template>
    <Loading v-if="this.loading"/>
    <div v-for="booking in this.bookings" v-bind:key="booking.id" class="booking dash-before-padding pb-4">
        <span class="counter">{{ booking.id > 9 ? booking.id : '0' + booking.id }}</span>
        <h5>{{ booking.name }}</h5>
        <h5>{{ booking.date }}</h5>
        <h5>{{ booking.time }}</h5>
        <div class="dash-before">
            {{ booking.message }}
        </div>
    </div>
</template>

<script>
    import axios from "axios";
    import Loading from '../common/Loading';

    const config = {
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    };

    export default {
        components: { Loading },
        data() {
            return {
                loading: true,
                bookings: []
            };
        },
        mounted() {
            this.emitter.on('BookingsUpdated', booking => {
                this.bookings.splice(0, 0, booking);
            });
        },
        async beforeCreate() {
            this.bookings = await axios.get(`/bookings`, config)
                .then((response) => {
                    this.loading = false;
                    return response.data;
                })
                .catch((error) => {
                    console.log('Errors: ' + error);
                });
        }
    }
</script>
