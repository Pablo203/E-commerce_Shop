from django.urls import path
from . import views

app_name="shop"

urlpatterns = [
    path('', views.index,  name="index"),
    path('login/', views.login, name="login"),
    path('register/', views.register, name='register'),
    path('search/', views.search, name="search"),
    path('product/', views.product, name="product"),
]
