from django.shortcuts import render
from django.template import loader
from django.http import HttpResponse
from django.template import loader

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