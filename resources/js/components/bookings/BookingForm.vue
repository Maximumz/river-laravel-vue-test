<template>
    <el-form :model="form">
        <el-alert v-if="this.success" title="Booking submitted successfully" type="success" />
        <el-alert v-if="this.unsuccessful" title="There was an issie submitting the booking" type="error" />
        <el-form-item>
            <el-input
                :rules="[{ required: true, message: 'A name is required' }]"
                v-model="form.name"
                placeholder="Your Name"
                style="width: 100%"
            />
        </el-form-item>
        <el-form-item>
            <el-col>
                <el-date-picker
                    :rules="[{ required: true, message: 'Date & time are required' }]"
                    v-model="form.date"
                    type="date"
                    placeholder="Pick a day"
                    style="width: 50%; padding-right:10px;"
                />
                <el-time-picker
                    :rules="[{ required: true, message: 'Date & time are required' }]"
                    v-model="form.time"
                    placeholder="Select a time"
                    style="width: 50%"
                />
            </el-col>
        </el-form-item>
        <el-form-item>
            <el-input
                :rules="[{ required: true, message: 'A message is required' }]"
                v-model="form.message"
                type="textarea"
                placeholder="Your Message"
                style="width: 100%"
            />
        </el-form-item>
        <el-form-item>
            <el-button type="" @click="this.onSubmit" :disabled="this.disabled" bg>Place Booking</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
    import axios from "axios";

    export default {
        data() {
            return {
                disabled: false,
                unsuccessful: false,
                success: false,
                form: {
                    name: '',
                    date: '',
                    time: '',
                    message: '',
                }
            };
        },
        mounted() {},
        methods: {
            async onSubmit() {
                this.disabled = true;
                const config = {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                }

                const dateFormatted = this.form.date ? new Date(this.form.date).toISOString().split('T')[0] : '';
                const timeFormatted = this.form.time ? new Date(this.form.time).toISOString().substring(11, 19) : '';

                const data = {
                    name: this.form.name,
                    date: dateFormatted,
                    time: timeFormatted,
                    message: this.form.message,
                };

                await axios.post(`/add-booking`, data, config)
                    .then((response) => {
                        this.clearForm();
                        this.unsuccessful = false;
                        this.success = true;
                        this.emitter.emit('BookingsUpdated', response.data);
                    })
                    .catch((error) => {
                        console.log('Errors: ' + error);
                        this.unsuccessful = true;
                    });

                this.disabled = false;
            },
            clearForm() {
                this.form = {
                    name: '',
                    date: '',
                    time: '',
                    message: '',
                }
            }
        },
    }
</script>
