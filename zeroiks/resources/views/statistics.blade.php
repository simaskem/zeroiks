@if (Auth::check())
    <div class="panel-body">
         <div class="center-block col-lg-8">
            <table class="table table-condensed statistics">
                <thead>
                    <tr class="active">
                        <th>Player</th>
                        <th>Games so far</th>
                        <th>Won</th>
                        <th>Lost</th>
                        <th>Tied</th>
                        <th>Last Game</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->ref_user_id->total_games }}</th>
                        <th>{{ $user->ref_user_id->win }}</th>
                        <th>{{ $user->ref_user_id->lose }}</th>
                        <th>{{ $user->ref_user_id->tie }}</th>
                        <th>{{ $user->ref_user_id->last_game_result }}</th>                        
                    </tr>
                </tbody>
            </table>
         </div>
    </div>
@endif
