"""shop_project_main URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include
from django.conf.urls import handler400, handler403, handler404, handler500
import django

app_name="shop"

handler400 = "shop.views.error400"
handler403 = "shop.views.error403"
handler404 = 'shop.views.error404'
handler500 = "shop.views.error500"

def custom_page_not_found(request):
    return django.views.defaults.page_not_found(request, None)

def custom_server_error(request):
    return django.views.defaults.server_error(request)

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('shop.urls')),
    path('login/', include('shop.urls')),
    path('register/', include('shop.urls')),
    path('search/', include('shop.urls')),
    path('product/', include('shop.urls')),
    path("404/", custom_page_not_found),
    path("500/", custom_server_error),
]
