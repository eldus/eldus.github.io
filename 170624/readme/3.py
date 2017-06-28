#!/usr/bin/env python
# 100 evenly-spaced values from 0 to 50

import math
import numpy as np
import matplotlib.pyplot as plt

x = np.linspace(0, 2*math.pi, 500)
y = np.sin(x)

plt.plot(x, y)
plt.plot(x, np.cos(x))
plt.show()
