#!/bin/bash
flag="NBCTF{L00P_4_TH3_W1N}"
for i in {1..50}
do
	flag=$(echo "$flag" | base64)
done
echo "$flag" > encoded_flag

