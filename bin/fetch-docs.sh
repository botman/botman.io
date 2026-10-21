#!/usr/bin/env bash
# Fetch the documentation (github.com/botman/docs) into resources/docs/<version>.
# Runs in the Laravel Cloud build; the Forge deploy script used to `git pull` the same branches.
set -euo pipefail

cd "$(dirname "$0")/.."

# docs directory => branch of botman/docs
for pair in "1.4:1.4" "1.5:1.5" "2.0:master" "master:master"; do
    dir="resources/docs/${pair%%:*}"
    branch="${pair#*:}"
    rm -rf "$dir"
    git clone --quiet --depth 1 --branch "$branch" https://github.com/botman/docs.git "$dir"
    rm -rf "$dir/.git"
done
