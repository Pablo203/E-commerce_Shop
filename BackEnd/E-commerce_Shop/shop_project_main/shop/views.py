from django.http.response import Http404
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
