<template>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column flex-md-row col-md-12">
                <div class="col-md-6 p-2 dash-before-padding">
                    <span class="counter">01</span>
                    <h2>HEADING</h2>
                    <p class="dash-before">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                    </p>
                    <el-button>Book Now</el-button>
                </div>
                <div class="col-md-6">&nbsp;</div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex flex-column flex-md-row col-md-12">
                <div class="col-md-6 pe-md-4">
                    <img class="img-fluid" src="/assets/img/image-water.png" alt="river water">
                </div>
                <div class="col-md-6 p-2 dash-before-padding">
                    <span class="counter">02</span>
                    <h3 class="dash-before">Lorem ipsum dolor sit amet, consetetur.</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column flex-md-row col-md-12">
                <div class="col-md-6 col-sm-12 p-2 dash-before-padding">
                    <span class="counter">03</span>
                    <h2 class="dash-before">HEADING</h2>
                    <h3>Lorem ipsum dolor sit amet, consetetur.</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua, vero eos et accusam et justo duo dolores et ea rebum.
                    </p>
                </div>
                <div class="col-md-6 p-2">
                    <booking-form></booking-form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column flex-wrap flex-md-row col-md-12">
                <bookings-list></bookings-list>
            </div>
        </div>
    </div>
</template>

<script>

import { defineAsyncComponent } from 'vue'
import BookingForm from '../bookings/BookingForm';
import Loading from '../common/Loading';

export default {
    components: {
        BookingsList: defineAsyncComponent({
            loader: () => import('../bookings/BookingsList'),
            loadingComponent: Loading,
            delay: 200,
        }), BookingForm },
    mounted() {}
}
</script>
