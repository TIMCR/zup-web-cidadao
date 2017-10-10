#!/usr/bin/env bash
git pull
rm -rf ../web/*
grunt build --force
