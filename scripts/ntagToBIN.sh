#!/usr/bin/env bash
echo "Thanks ide for the converter... "
set -euo pipefail
echo -e -n "$(grep 'Page \d\+: .*' "$1" | cut -d: -f2 | tr -d '\n' | sed 's/ /\\x/g')" > "${1%.nfc}.bin"
