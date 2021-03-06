@extends('layouts.site')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">With apples drink teriyaki. </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
    <!-- Products list -->
    <div class="gray-background">
        <section class="products__cultivation__category main-wrapper">
                <article class="card__product">
                    <a href="/">
                        <div class="card__cover">
                            <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                        </div>
                        <header class="card__product-header">
                            <h2 class="title-medium">Nome Categoria</h2>
                            <p>Descrição</p>
                        </header>
                    </a>
                </article>
            <article class="card__product">
                <a href="/">
                    <div class="card__cover">
                        <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                    </div>
                    <header class="card__product-header">
                        <h2 class="title-medium">Nome Categoria</h2>
                        <p>Descrição</p>
                    </header>
                </a>
            </article>
            <article class="card__product">
                <a href="/">
                    <div class="card__cover">
                        <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                    </div>
                    <header class="card__product-header">
                        <h2 class="title-medium">Nome Categoria</h2>
                        <p>Descrição</p>
                    </header>
                </a>
            </article>
            <article class="card__product">
                <a href="/">
                    <div class="card__cover">
                        <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                    </div>
                    <header class="card__product-header">
                        <h2 class="title-medium">Nome Categoria</h2>
                        <p>Descrição</p>
                    </header>
                </a>
            </article>
            <article class="card__product">
                <a href="/">
                    <div class="card__cover">
                        <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                    </div>
                    <header class="card__product-header">
                        <h2 class="title-medium">Nome Categoria</h2>
                        <p>Descrição</p>
                    </header>
                </a>
            </article>
            <article class="card__product">
                <a href="/">
                    <div class="card__cover">
                        <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                    </div>
                    <header class="card__product-header">
                        <h2 class="title-medium">Nome Categoria</h2>
                        <p>Descrição</p>
                    </header>
                </a>
            </article>
        </section>
    </div>
@endsection
