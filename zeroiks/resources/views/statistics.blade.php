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
                        <th>Streak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <th>Simas</th>
                        <th>66</th>
                        <th>35</th>
                        <th>25</th>
                        <th>6</th>
                        <th>Won</th>
                        <th>8</th>
                    </tr>
                </tbody>
            </table>
         </div>
    </div>
@endif