var lz_icons = [
    {name:'commenting',path:'M640 896q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm384 0q0 174-120 321.5t-326 233-450 85.5q-110 0-211-18-173 173-435 229-52 10-86 13-12 1-22-6t-13-18q-4-15 20-37 5-5 23.5-21.5t25.5-23.5 23.5-25.5 24-31.5 20.5-37 20-48 14.5-57.5 12.5-72.5q-146-90-229.5-216.5t-83.5-269.5q0-174 120-321.5t326-233 450-85.5 450 85.5 326 233 120 321.5z'},
    {name:'comments',path:'M1408 768q0 139-94 257t-256.5 186.5-353.5 68.5q-86 0-176-16-124 88-278 128-36 9-86 16h-3q-11 0-20.5-8t-11.5-21q-1-3-1-6.5t.5-6.5 2-6l2.5-5 3.5-5.5 4-5 4.5-5 4-4.5q5-6 23-25t26-29.5 22.5-29 25-38.5 20.5-44q-124-72-195-177t-71-224q0-139 94-257t256.5-186.5 353.5-68.5 353.5 68.5 256.5 186.5 94 257zm384 256q0 120-71 224.5t-195 176.5q10 24 20.5 44t25 38.5 22.5 29 26 29.5 23 25q1 1 4 4.5t4.5 5 4 5 3.5 5.5l2.5 5 2 6 .5 6.5-1 6.5q-3 14-13 22t-22 7q-50-7-86-16-154-40-278-128-90 16-176 16-271 0-472-132 58 4 88 4 161 0 309-45t264-129q125-92 192-212t67-254q0-77-23-152 129 71 204 178t75 230z'},
    {name:'ellipsis-h',vy:-12,path:'M576 736v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm512 0v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68zm512 0v192q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h192q40 0 68 28t28 68z'},
    {name:'envelope',vx:-12.5,vy:-11.5,t:13,path:'M1792 710v794q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-794q44 49 101 87 362 246 497 345 57 42 92.5 65.5t94.5 48 110 24.5h2q51 0 110-24.5t94.5-48 92.5-65.5q170-123 498-345 57-39 100-87zm0-294q0 79-49 151t-122 123q-376 261-468 325-10 7-42.5 30.5t-54 38-52 32.5-57.5 27-50 9h-2q-23 0-50-9t-57.5-27-52-32.5-54-38-42.5-30.5q-91-64-262-182.5t-205-142.5q-62-42-117-115.5t-55-136.5q0-78 41.5-130t118.5-52h1472q65 0 112.5 47t47.5 113z'},
    {name:'expand',path:'M883 1056q0 13-10 23l-332 332 144 144q19 19 19 45t-19 45-45 19h-448q-26 0-45-19t-19-45v-448q0-26 19-45t45-19 45 19l144 144 332-332q10-10 23-10t23 10l114 114q10 10 10 23zm781-864v448q0 26-19 45t-45 19-45-19l-144-144-332 332q-10 10-23 10t-23-10l-114-114q-10-10-10-23t10-23l332-332-144-144q-19-19-19-45t19-45 45-19h448q26 0 45 19t19 45z'},
    {name:'facebook',vx:-11,vy:-12,path:'M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z'},
    {name:'google-plus-official',path:'M896 786h725q12 67 12 128 0 217-91 387.5t-259.5 266.5-386.5 96q-157 0-299-60.5t-245-163.5-163.5-245-60.5-299 60.5-299 163.5-245 245-163.5 299-60.5q300 0 515 201l-209 201q-123-119-306-119-129 0-238.5 65t-173.5 176.5-64 243.5 64 243.5 173.5 176.5 238.5 65q87 0 160-24t120-60 82-82 51.5-87 22.5-78h-436v-264z'},
    {name:'info-circle',path:'M1152 1376v-160q0-14-9-23t-23-9h-96v-512q0-14-9-23t-23-9h-320q-14 0-23 9t-9 23v160q0 14 9 23t23 9h96v320h-96q-14 0-23 9t-9 23v160q0 14 9 23t23 9h448q14 0 23-9t9-23zm-128-896v-160q0-14-9-23t-23-9h-192q-14 0-23 9t-9 23v160q0 14 9 23t23 9h192q14 0 23-9t9-23zm640 416q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z'},
    {name:'lightbulb-o',path:'M1120 576q0 13-9.5 22.5t-22.5 9.5-22.5-9.5-9.5-22.5q0-46-54-71t-106-25q-13 0-22.5-9.5t-9.5-22.5 9.5-22.5 22.5-9.5q50 0 99.5 16t87 54 37.5 90zm160 0q0-72-34.5-134t-90-101.5-123-62-136.5-22.5-136.5 22.5-123 62-90 101.5-34.5 134q0 101 68 180 10 11 30.5 33t30.5 33q128 153 141 298h228q13-145 141-298 10-11 30.5-33t30.5-33q68-79 68-180zm128 0q0 155-103 268-45 49-74.5 87t-59.5 95.5-34 107.5q47 28 47 82 0 37-25 64 25 27 25 64 0 52-45 81 13 23 13 47 0 46-31.5 71t-77.5 25q-20 44-60 70t-87 26-87-26-60-70q-46 0-77.5-25t-31.5-71q0-24 13-47-45-29-45-81 0-37 25-64-25-27-25-64 0-54 47-82-4-50-34-107.5t-59.5-95.5-74.5-87q-103-113-103-268 0-99 44.5-184.5t117-142 164-89 186.5-32.5 186.5 32.5 164 89 117 142 44.5 184.5z'},
    {name:'pencil',path:'M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z'},
    {name:'pencil-square',path:'M532 1108l152 152-52 52h-56v-96h-96v-56zm414-390q14 13-3 30l-291 291q-17 17-30 3-14-13 3-30l291-291q17-17 30-3zm-274 690l544-544-288-288-544 544v288h288zm608-608l92-92q28-28 28-68t-28-68l-152-152q-28-28-68-28t-68 28l-92 92zm384-384v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z'},
    {name:'phone',path:'M1600 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5t-57.5-12.5-47.5-14.5-55.5-20.5-49-18q-98-35-175-83-128-79-264.5-215.5t-215.5-264.5q-48-77-83-175-3-9-18-49t-20.5-55.5-14.5-47.5-12.5-57.5-3.5-52.5q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z'},
    {name:'plus-square',path:'M1408 960v-128q0-26-19-45t-45-19h-320v-320q0-26-19-45t-45-19h-128q-26 0-45 19t-19 45v320h-320q-26 0-45 19t-19 45v128q0 26 19 45t45 19h320v320q0 26 19 45t45 19h128q26 0 45-19t19-45v-320h320q26 0 45-19t19-45zm256-544v960q0 119-84.5 203.5t-203.5 84.5h-960q-119 0-203.5-84.5t-84.5-203.5v-960q0-119 84.5-203.5t203.5-84.5h960q119 0 203.5 84.5t84.5 203.5z'},
    {name:'thumbs-o-up',path:'M384 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5h-352q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5-59.5 109.5q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5h-129q-96 0-189.5-22.5t-216.5-65.5q-116-40-138-40h-288q-53 0-90.5-37.5t-37.5-90.5v-640q0-53 37.5-90.5t90.5-37.5h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5t30.5-126.5 62-108q39-37 90-37 84 0 151 32.5t102 101.5 35 186q0 93-48 192h176q104 0 180 76t76 179z'},
    {name:'thumbs-o-down',path:'M384 448q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152 576q0-35-21.5-81t-53.5-47q15-17 25-47.5t10-55.5q0-69-53-119 18-32 18-69t-17.5-73.5-47.5-52.5q5-30 5-56 0-85-49-126t-136-41h-128q-131 0-342 73-5 2-29 10.5t-35.5 12.5-35 11.5-38 11-33 6.5-31.5 3h-32v640h32q16 0 35.5 9t40 27 38.5 35.5 40 44 34.5 42.5 31.5 41 23 30q55 68 77 91 41 43 59.5 109.5t30.5 125.5 38 85q96 0 128-47t32-145q0-59-48-160.5t-48-159.5h352q50 0 89-38.5t39-89.5zm128 1q0 103-76 179t-180 76h-176q48 99 48 192 0 118-35 186-35 69-102 101.5t-151 32.5q-51 0-90-37-34-33-54-82t-25.5-90.5-17.5-84.5-31-64q-48-50-107-127-101-131-137-155h-274q-53 0-90.5-37.5t-37.5-90.5v-640q0-53 37.5-90.5t90.5-37.5h288q22 0 138-40 128-44 223-66t200-22h112q140 0 226.5 79t85.5 216v5q60 77 60 178 0 22-3 43 38 67 38 144 0 36-9 69 49 74 49 163z'},
    {name:'times-circle',path:'M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z'},
    {name:'toggle-off',path:'M1024 896q0-104-40.5-198.5t-109.5-163.5-163.5-109.5-198.5-40.5-198.5 40.5-163.5 109.5-109.5 163.5-40.5 198.5 40.5 198.5 109.5 163.5 163.5 109.5 198.5 40.5 198.5-40.5 163.5-109.5 109.5-163.5 40.5-198.5zm768 0q0-104-40.5-198.5t-109.5-163.5-163.5-109.5-198.5-40.5h-386q119 90 188.5 224t69.5 288-69.5 288-188.5 224h386q104 0 198.5-40.5t163.5-109.5 109.5-163.5 40.5-198.5zm128 0q0 130-51 248.5t-136.5 204-204 136.5-248.5 51h-768q-130 0-248.5-51t-204-136.5-136.5-204-51-248.5 51-248.5 136.5-204 204-136.5 248.5-51h768q130 0 248.5 51t204 136.5 136.5 204 51 248.5z'},
    {name:'toggle-on',path:'M-128 896q0-130 51-248.5t136.5-204 204-136.5 248.5-51h768q130 0 248.5 51t204 136.5 136.5 204 51 248.5-51 248.5-136.5 204-204 136.5-248.5 51h-768q-130 0-248.5-51t-204-136.5-136.5-204-51-248.5zm1408 512q104 0 198.5-40.5t163.5-109.5 109.5-163.5 40.5-198.5-40.5-198.5-109.5-163.5-163.5-109.5-198.5-40.5-198.5 40.5-163.5 109.5-109.5 163.5-40.5 198.5 40.5 198.5 109.5 163.5 163.5 109.5 198.5 40.5z'},
    {name:'twitter',vy:-12,path:'M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z'},
    {name:'youtube',path:'M1099 1244v211q0 67-39 67-23 0-45-22v-301q22-22 45-22 39 0 39 67zm338 1v46h-90v-46q0-68 45-68t45 68zm-966-218h107v-94h-312v94h105v569h100v-569zm288 569h89v-494h-89v378q-30 42-57 42-18 0-21-21-1-3-1-35v-364h-89v391q0 49 8 73 12 37 58 37 48 0 102-61v54zm429-148v-197q0-73-9-99-17-56-71-56-50 0-93 54v-217h-89v663h89v-48q45 55 93 55 54 0 71-55 9-27 9-100zm338-10v-13h-91q0 51-2 61-7 36-40 36-46 0-46-69v-87h179v-103q0-79-27-116-39-51-106-51-68 0-107 51-28 37-28 116v173q0 79 29 116 39 51 108 51 72 0 108-53 18-27 21-54 2-9 2-58zm-608-913v-210q0-69-43-69t-43 69v210q0 70 43 70t43-70zm719 751q0 234-26 350-14 59-58 99t-102 46q-184 21-555 21t-555-21q-58-6-102.5-46t-57.5-99q-26-112-26-350 0-234 26-350 14-59 58-99t103-47q183-20 554-20t555 20q58 7 102.5 47t57.5 99q26 112 26 350zm-998-1276h102l-121 399v271h-100v-271q-14-74-61-212-37-103-65-187h106l71 263zm370 333v175q0 81-28 118-37 51-106 51-67 0-105-51-28-38-28-118v-175q0-80 28-117 38-51 105-51 69 0 106 51 28 37 28 117zm335-162v499h-91v-55q-53 62-103 62-46 0-59-37-8-24-8-75v-394h91v367q0 33 1 35 3 22 21 22 27 0 57-43v-381h91z'},
    {name:'question',vx:-7,vy:-8,t:18,path:'M1088 1256v240q0 16-12 28t-28 12h-240q-16 0-28-12t-12-28v-240q0-16 12-28t28-12h240q16 0 28 12t12 28zm316-600q0 54-15.5 101t-35 76.5-55 59.5-57.5 43.5-61 35.5q-41 23-68.5 65t-27.5 67q0 17-12 32.5t-28 15.5h-240q-15 0-25.5-18.5t-10.5-37.5v-45q0-83 65-156.5t143-108.5q59-27 84-56t25-76q0-42-46.5-74t-107.5-32q-65 0-108 29-35 25-107 115-13 16-31 16-12 0-25-8l-164-125q-13-10-15.5-25t5.5-28q160-266 464-266 80 0 161 31t146 83 106 127.5 41 158.5z'},
    {name:'close',path:'M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z'},
    {name:'send',path:'M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-453-185-242 295q-18 23-49 23-13 0-22-4-19-7-30.5-23.5t-11.5-36.5v-349l864-1059-1069 925-395-162q-37-14-40-55-2-40 32-59l1664-960q15-9 32-9 20 0 36 11z'},
    {name:'clip',path:'M1596 1385q0 117-79 196t-196 79q-135 0-235-100l-777-776q-113-115-113-271 0-159 110-270t269-111q158 0 273 113l605 606q10 10 10 22 0 16-30.5 46.5t-46.5 30.5q-13 0-23-10l-606-607q-79-77-181-77-106 0-179 75t-73 181q0 105 76 181l776 777q63 63 145 63 64 0 106-42t42-106q0-82-63-145l-581-581q-26-24-60-24-29 0-48 19t-19 48q0 32 25 59l410 410q10 10 10 22 0 16-31 47t-47 31q-12 0-22-10l-410-410q-63-61-63-149 0-82 57-139t139-57q88 0 149 63l581 581q100 98 100 235z'},
    {name:'whatsapp',path:'M1113 974q13 0 97.5 44t89.5 53q2 5 2 15 0 33-17 76-16 39-71 65.5t-102 26.5q-57 0-190-62-98-45-170-118t-148-185q-72-107-71-194v-8q3-91 74-158 24-22 52-22 6 0 18 1.5t19 1.5q19 0 26.5 6.5t15.5 27.5q8 20 33 88t25 75q0 21-34.5 57.5t-34.5 46.5q0 7 5 15 34 73 102 137 56 53 151 101 12 7 22 7 15 0 54-48.5t52-48.5zm-203 530q127 0 243.5-50t200.5-134 134-200.5 50-243.5-50-243.5-134-200.5-200.5-134-243.5-50-243.5 50-200.5 134-134 200.5-50 243.5q0 203 120 368l-79 233 242-77q158 104 345 104zm0-1382q153 0 292.5 60t240.5 161 161 240.5 60 292.5-60 292.5-161 240.5-240.5 161-292.5 60q-195 0-365-94l-417 134 136-405q-108-178-108-389 0-153 60-292.5t161-240.5 240.5-161 292.5-60z'},
    {name:'telegram',vx:-13,vy:-14,t:11,path:'M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-453-185-242 295q-18 23-49 23-13 0-22-4-19-7-30.5-23.5t-11.5-36.5v-349l864-1059-1069 925-395-162q-37-14-40-55-2-40 32-59l1664-960q15-9 32-9 20 0 36 11z'},
    {name:'instagram',path:'M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm138 0q0 164-115 279t-279 115-279-115-115-279 115-279 279-115 279 115 115 279zm108-410q0 38-27 65t-65 27-65-27-27-65 27-65 65-27 65 27 27 65zm-502-220q-7 0-76.5-.5t-105.5 0-96.5 3-103 10-71.5 18.5q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103-3 96.5 0 105.5.5 76.5-.5 76.5 0 105.5 3 96.5 10 103 18.5 71.5q20 50 58 88t88 58q29 11 71.5 18.5t103 10 96.5 3 105.5 0 76.5-.5 76.5.5 105.5 0 96.5-3 103-10 71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103 3-96.5 0-105.5-.5-76.5.5-76.5 0-105.5-3-96.5-10-103-18.5-71.5q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10-96.5-3-105.5 0-76.5.5zm768 630q0 229-5 317-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124t-124-322q-5-88-5-317t5-317q10-208 124-322t322-124q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z'},
    {name:'linkedin',path:'M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z'},
    {name:'camera',vx:-7,path:'M1024 672q119 0 203.5 84.5t84.5 203.5-84.5 203.5-203.5 84.5-203.5-84.5-84.5-203.5 84.5-203.5 203.5-84.5zm704-416q106 0 181 75t75 181v896q0 106-75 181t-181 75h-1408q-106 0-181-75t-75-181v-896q0-106 75-181t181-75h224l51-136q19-49 69.5-84.5t103.5-35.5h512q53 0 103.5 35.5t69.5 84.5l51 136h224zm-704 1152q185 0 316.5-131.5t131.5-316.5-131.5-316.5-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5z'}
];