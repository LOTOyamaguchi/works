from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse


def index(request):
    # return HttpResponse("借りのトップページ")
    return render(request, "app/index.html")
