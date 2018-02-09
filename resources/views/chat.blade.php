@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="far fa-comment"></i></div>

                <div class="panel-body">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>

            <div class="inf_cont">
            <div class="info">
                <span> <i class="fas fa-users">   </i> &nbsp;&nbsp;&nbsp;Recently active users:</span> <br>
                <?php
                // Import at the top
                use Kim\Activity\Activity;

                // Find latest users
                $activities = Activity::users()->get();
                // Loop through and echo user's name


                foreach ($activities as $activity) {
                    echo '<span class="act_user"><span class="circle"></span> &nbsp;&nbsp;'.$activity->user->name . '</span><br>';
                }

                ?>

            </div>

            <div class="info">  <i class="fas fa-user-secret"></i> &nbsp;&nbsp;&nbsp;Number of guests:
                <?php

                $numberOfGuests = Activity::guests()->count();
                echo $numberOfGuests;
                ?>

            </div>
        </div>
        </div>
    </div>

</div>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</div>
@endsection