import cv2
img = cv2.imread('anh.jpg')
edged_img = cv2.Canny(img, 100, 200)
cv2.imshow('edged image', edged_img)
cv2.waitKey(0)
cv2.destroyAllWindows()