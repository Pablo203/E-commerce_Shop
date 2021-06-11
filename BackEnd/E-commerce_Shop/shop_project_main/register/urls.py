from django.urls import path
import django
from . import views

app_name="register"

def custom_page_not_found(request):
    return django.views.defaults.page_not_found(request, None)

def custom_server_error(request):
    return django.views.defaults.server_error(request)

urlpatterns = [
    path('register/', views.register, name='register'),
]