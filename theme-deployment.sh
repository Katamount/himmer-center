#!/bin/bash
ssh -i ~/.ssh/webserver.pem ubuntu@18.190.78.242 'cd himmer-center; git pull'
