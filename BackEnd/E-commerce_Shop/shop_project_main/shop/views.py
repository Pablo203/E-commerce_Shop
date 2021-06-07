from django import template
from django.http import response
from django.http.response import HttpResponseBase
from django.shortcuts import render
from django.template import loader
from django.http import HttpResponse


# Create your views here.


def index(request):
    template = loader.get_template('shop/index.html')
    return HttpResponse(template.render({}, request))


def login(request):
    template = loader.get_template('shop/log.html')
    return HttpResponse(template.render({}, request))


def register(request):
    template = loader.get_template('shop/registration.html')
    return HttpResponse(template.render({}, request))


def search(request):
    template = loader.get_template('shop/product-search.html')
    return HttpResponse(template.render({}, request))


def product(request):
    template = loader.get_template('shop/product-page.html')
    return HttpResponse(template.render({}, request))

def error400(request, exception):
    template = loader.get_template('shop/400.shtml')
    return HttpResponse(template.render({}, request))

def error403(request, exception):
    template = loader.get_template('shop/403.shtml')
    return HttpResponse(template.render({}, request))

def error404(request, exception):
    template = loader.get_template('shop/404.shtml')
    return HttpResponse(template.render({}, request))

def error500(request):
    template = loader.get_template('shop/500.shtml')
    return HttpResponse(template.render({}, request))

def error503(request):
    template = loader.get_template('shop/503.shtml')
    return HttpResponse(template.render({}, request))

def error508(request):
    template = loader.get_template('shop/508.shtml')
    return HttpResponse(template.render({}, request))