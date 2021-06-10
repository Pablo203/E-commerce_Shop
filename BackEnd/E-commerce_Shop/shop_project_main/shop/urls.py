from django.urls import path
import django
from . import views

app_name="shop"

def custom_page_not_found(request):
    return django.views.defaults.page_not_found(request, None)

def custom_server_error(request):
    return django.views.defaults.server_error(request)

urlpatterns = [
    path('', views.index,  name="index"),
    path('login/', views.login, name="login"),
    path('register/', views.register, name='register'),
    path('search/', views.search, name="search"),
    path('product/', views.product, name="product"),
    path("404/", custom_page_not_found),
    path("500/", custom_server_error),
]