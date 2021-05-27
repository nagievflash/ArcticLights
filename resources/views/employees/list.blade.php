    <section class="team team--l-purple">
        <div class="row">
            <div class="team__head">
                <h2 class="heading heading--dark heading--s">Команда исследователей</h2>
            </div>
            <div class="team__container">
                @each('employees.card', $employees, 'employee')
            </div>
        </div>
    </section>
