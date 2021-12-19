<footer class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Zatakata - cinema</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">
                Все сеансы начинаются с рекламно-информационного блока.
                Точную продолжительность сеансов можно уточнить в кинотеатре.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{ route('agreement.index') }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Соглашение</a>
                <a href="{{ route('politics.index') }}" class="btn btn-outline-light btn-lg px-4">Политика</a>
            </div>
        </div>
    </div>
</footer>

@stack('js')
</body>

</html>
